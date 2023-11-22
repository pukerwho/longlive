const { Configuration, OpenAIApi } = require("openai");
const btn = document.getElementById('btn');
if (btn) {
  btn.addEventListener('click', (e) => {
    const keywords = document.getElementById('keywords');
    const chatgptResults = document.getElementById("chatgpt-results");
    let keywordsArray = [];

    const chatKey = chatkey.value;
    const configuration = new Configuration({
      apiKey: chatKey,
    });
    delete configuration.baseOptions.headers['User-Agent'];
    const openai = new OpenAIApi(configuration);
    //отримаємо значення в textarea
    const keywordsValue = keywords.value;
    //розділяємо і робимо масив
    keywordsArray = keywordsValue.split(',');
    //проходимо по масиву
    for (keyword of keywordsArray) {
      //видаляємо всі пробіли та переноси
      keyword = keyword.trim();
      gptCompletion(keyword);
    }
    keywords.value = "";


    async function gptCompletion(keyword) {
      try {
        const shortAnswer = await openai.createChatCompletion({
          model: "gpt-3.5-turbo",
          messages: [
            {
              "role": "user",
              "content": "What's the average lifespan of a " + keyword + "? Give a short answer."
            },
          ],
        });
        htmlSend(keyword, "Отримали коротку відповідь");
        console.log("Отримали коротку відповідь");

        const longAnswer = await openai.createChatCompletion({
          model: "gpt-3.5-turbo",
          messages: [
            {
              "role": "user",
              "content": "Write in more detail on the following topic: What's the average life span of a " + keyword + ". Answer in three short paragraphs. Answer in MARKDOWN format. But don't use headings.",
            },
          ],
        });
        htmlSend(keyword, "Отримали довгу відповідь");
        console.log("Отримали довгу відповідь");

        const factsAnswer = await openai.createChatCompletion({
          model: "gpt-3.5-turbo",
          messages: [
            {
              "role": "user",
              "content": "Tell interesting facts (no more than 5) about " + keyword + ". Do it in the form of a list. Answer in MARKDOWN format. But don't use headings."
            },
          ],
        });
        htmlSend(keyword, "Отримали факти");
        console.log("Отримали факти");

        const summaryAnswer = await openai.createChatCompletion({
          model: "gpt-3.5-turbo",
          messages: [
            {
              "role": "user",
              "content": "Summary and final thoughts about: How long do " + keyword + " live? . Put it all in one short paragraph. Answer in MARKDOWN format. But don't use headings."
            },
          ],
        });
        htmlSend(keyword, "Отримали висновок");
        console.log("Отримали висновок");

        console.log(factsAnswer);
        
        title = "What is " + keyword + " average lifespan?";  
        short = shortAnswer.data.choices[0].message.content;
        long = longAnswer.data.choices[0].message.content;
        facts = factsAnswer.data.choices[0].message.content;
        summary = summaryAnswer.data.choices[0].message.content;

        //відправляємо значення до php функції
        let data = {
          'action': 'chatgpt_click_action', 
          'title': title,
          'meta_post_long': long,
          'meta_post_short': short,
          'meta_post_facts': facts,
          'meta_post_summary': summary,
          'meta_post_name': keyword
        };
        $.ajax({
          url: ajaxurl, // AJAX handler
          data: data,
          type: 'POST',
          success : function(response) {
            if (response) {
              console.log(response);
            }
            htmlSend(keyword, "Додано");
          }
        });
      }
      catch (e) {
        console.log("Error getting GPT completion: ", e);
        htmlSend(keyword, e);
        throw e
      }
    }

    function htmlSend(keyword, text) {
      const box = document.createElement("div");
      let today = new Date();
      let date = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();;
      box.innerHTML = date + ': ' + keyword + ': ' + text + '<br>';
      chatgptResults.appendChild(box);
    }

    function forTestDel(keyword) {
      let data = {
        'action': 'chatgpt_click_action',
        'title': keyword,
        'meta_short': "hi",
      };
      $.ajax({
        url: ajaxurl, // AJAX handler
        data: data,
        type: 'POST',
        beforeSend : function(xhr) {
          console.log('Загружаю')
          htmlBeforeSend(keyword)
        },
        success : function(response) {
          if (response) {
            console.log(response);
          }
          htmlSuccessSend(keyword)
        }
      });
    }
  });
}
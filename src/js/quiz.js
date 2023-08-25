var $ = require( 'jquery' );

document.addEventListener("DOMContentLoaded", function(event) {
  const sidebarAnswer = 2;
  let sidebarVote = document.querySelector('.js-quiz-sidebar');
  let sidebarItems = document.querySelectorAll('.js-quiz-item');
  let sidebarVoteLocal = localStorage.getItem('sidebar_vote');

  if (sidebarVoteLocal && sidebarVote) {
    //Показываем результаты
    if (sidebarVoteLocal == sidebarAnswer) {
      document.querySelector('.js-quiz-item[data-q-banana="' + sidebarAnswer + '"]').classList.add('vote-correct');  
    } else {
      document.querySelector('.js-quiz-item[data-q-banana="' + sidebarVoteLocal + '"]').classList.add('vote-wrong');
      document.querySelector('.js-quiz-item[data-q-banana="' + sidebarAnswer + '"]').classList.add('vote-correct');  
    }
  } else {
    if (sidebarVote) {
      sidebarItems.forEach(item => {
        item.addEventListener('click', () => {
          let sidebarItemData = item.dataset.qBanana;
          localStorage.setItem('sidebar_vote', sidebarItemData);

          if (sidebarItemData == sidebarAnswer) {
            item.classList.add('vote-correct');
          } else {
            item.classList.add('vote-wrong');
            document.querySelector('.js-quiz-item[data-q-banana="' + sidebarAnswer + '"]').classList.add('vote-correct');
          }
        });
      })
    }  
  }
});
const menu = document.querySelector('#menu');
  const list = document.querySelector('#list');

  menu.addEventListener('click', () => {
    list.classList.toggle('hidden');
    chuyen1.classList.toggle('dropdown-menu');
    chuyen1.classList.toggle('hidden');
  });
  const choices = new Choices('[data-trigger]',
  {
    searchEnabled: false,
    itemSelectText: '',
  });

  $("select").click(function() {
    var open = $(this).data("isopen");
    if(open) {
      window.location.href = $(this).val()
    }
    //set isopen to opposite so next time when use clicked select box
    //it wont trigger this event
    $(this).data("isopen", !open);
  });
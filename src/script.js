window.addEventListener('scroll', function() {
    var menu = document.querySelector('.sticky-menu');
    var menuPosition = menu.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;
    
    if (menuPosition < windowHeight) {
      menu.style.display = 'block';
    } else {
      menu.style.display = 'none';
    }
  });

  function closeForm() {
    document.getElementById("searchForm").style.display = "none";
}





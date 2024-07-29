</main>
<!-- // .wrapper -->

</body>

</html>

<script src="js/script.js"></script>

<script>

  /*
    const sel__navItem = 'nav ul li a';
  
    // Select all navigation items
    const navItems = document.querySelectorAll(sel__navItem);
    console.log(`navItems:`, navItems)
  
    // Function to handle click event
    function handleNavItemClick(event) {
      // Remove active class from all nav items
      navItems.forEach(item => item.classList.remove('active'));
  
      // Add active class to the clicked nav item
      event.target.classList.add('active');
    }
  
    // Add click event listener to each nav item
    navItems.forEach(item => {
      item.addEventListener('click', handleNavItemClick);
    });
  */

  ////// VERSION 2 ///////


  /*
  var links = document.querySelectorAll('li a');

for (link of links) {
    if (window.location.pathname == link.getAttribute('href')) {
        link.classList.add('active')
    } else {
        link.classList.remove('active')
    }
}
*/

  // Select all navigation items
  const navItems = document.querySelectorAll('.nav-item');

  // Function to handle click event
  function handleNavItemClick(event) {
    // Remove active class from all nav items
    navItems.forEach(item => item.classList.remove('active'));

    // Add active class to the clicked nav item
    event.target.classList.add('active');

    // Save the active nav item index to localStorage
    const activeIndex = Array.from(navItems).indexOf(event.target);
    localStorage.setItem('activeNavItemIndex', activeIndex);
  }

  // Add click event listener to each nav item
  navItems.forEach(item => {
    item.addEventListener('click', handleNavItemClick);
  });

  // Get the active nav item index from localStorage
  const activeNavItemIndex = localStorage.getItem('activeNavItemIndex');

  // If there is an active nav item index, set it as active
  if (activeNavItemIndex !== null && navItems[activeNavItemIndex]) {
    navItems[activeNavItemIndex].classList.add('active');
  }
</script>
</script>
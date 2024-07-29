</main>
<!-- // .wrapper -->

</body>

</html>

<script src="js/script.js"></script>

<script>

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
</script>
const toggleSidebarLink = document.getElementById('toggleSidebar');
const side = document.querySelector('.side');
const storageKey = 'sidebarVisible';


const initialVisibility = localStorage.getItem(storageKey) || 'visible';
side.classList.toggle('hidden', initialVisibility === 'hidden');

toggleSidebarLink.addEventListener('click', function(event) {
  event.preventDefault();
  const isVisible = !side.classList.contains('hidden');
  side.classList.toggle('hidden');

  localStorage.setItem(storageKey, isVisible ? 'hidden' : 'visible');
});

function enableDarkMode() {
    document.body.classList.add('dark-mode');
    document.querySelector('header').style.backgroundColor = '#222';
    document.querySelector('header').style.color = '#fff';
    document.querySelector('.logo h1').style.color = '#fff';
    document.querySelector('.hero').style.backgroundColor = '#222';
    document.querySelector('footer').style.backgroundColor = '#222';
    const aboutSection = document.querySelector('.about');
    aboutSection.style.backgroundColor = '#333';
    aboutSection.style.color = '#fff';
  }
  
  function enableLightMode() {
    document.body.classList.remove('dark-mode');
    document.querySelector('header').style.backgroundColor = '#007BFF';
    document.querySelector('header').style.color = 'white';
    document.querySelector('.logo h1').style.color = '#fff';
    document.querySelector('.hero').style.backgroundColor = 'transparent';
    document.querySelector('footer').style.backgroundColor = '#007BFF';
    const aboutSection = document.querySelector('.about');
    aboutSection.style.backgroundColor = '#f4f4f4';
    aboutSection.style.color = '#333';
  }
  
  function showPopup() {
    alert('Jika ada keendala dalam pemesanan tiket harap hubungi nomor wa/telepon yang ada didalam "Tentang Owner/Contact Person agar dibantu dalam pendaftaran');
  }
  
  document.querySelector('#darkModeButton').addEventListener('click', enableDarkMode);
  document.querySelector('#lightModeButton').addEventListener('click', enableLightMode);
  document.querySelector('#popupButton').addEventListener('click', showPopup);
  
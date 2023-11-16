function enableDarkMode() {
    document.body.classList.add('dark-mode');
    document.querySelector('header').style.backgroundColor = '#222';
    document.querySelector('header').style.color = '#fff';
    document.querySelector('.logo h1').style.color = '#fff';
    document.querySelector('.hero').style.backgroundColor = '#222';
    document.querySelector('footer').style.backgroundColor = '#222';
    document.querySelector('.terimakasih').style.backgroundColor = '#222';
    document.querySelector('.dash-main').style.backgroundColor = '#222';
    const aboutSection = document.querySelector('.about');
    aboutSection.style.backgroundColor = '#333';
    aboutSection.style.color = '#fff';
  }
  
  function enableLightMode() {
    document.body.classList.remove('dark-mode');
    document.querySelector('header').style.backgroundColor = '#a52a2a';
    document.querySelector('header').style.color = 'white';
    document.querySelector('.logo h1').style.color = '#fff';
    document.querySelector('.hero').style.backgroundColor = 'transparent';
    document.querySelector('.terimakasih').style.backgroundColor = 'transparent';
    document.querySelector('footer').style.backgroundColor = '#fff';
    const aboutSection = document.querySelector('.about');
    aboutSection.style.backgroundColor = '#f4f4f4';
    aboutSection.style.color = '#333';
  }
  
  function showPopup() {
    alert('Jika ada kendala dalam pemesanan tiket harap hubungi nomor wa/telepon : 085387390272');
  }
  
  document.querySelector('#darkModeButton').addEventListener('click', enableDarkMode);
  document.querySelector('#lightModeButton').addEventListener('click', enableLightMode);
  document.querySelector('#popupButton').addEventListener('click', showPopup);
  
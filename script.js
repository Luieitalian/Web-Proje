const temizleBtn = document.querySelector('#temizle-btn');
const gonderBtn = document.querySelector('#gonder-btn');
const isim = document.querySelector('#name');
const surname = document.querySelector('#surname');
const email = document.querySelector('#email');
const textarea = document.querySelector('#textarea');
const selection = document.querySelector('#selection');

temizleBtn.addEventListener('click', () => {
  gonderBtn.disabled = true;
  gonderBtn.style.backgroundColor = 'white';
});

isim.addEventListener('change', () => {
  if (!isim.textContent.match('/[a-zA-Z]/')) {
    gonderBtn.disabled = true;
    gonderBtn.style.backgroundColor = 'red';
  } else {
    gonderBtn.disabled = false;
    gonderBtn.style.backgroundColor = 'white';
  }
});
surname.addEventListener('change', () => {
  if (!surname.textContent.match('/[a-zA-Z]/')) {
    gonderBtn.disabled = true;
    gonderBtn.style.backgroundColor = 'red';
  } else {
    gonderBtn.disabled = false;
    gonderBtn.style.backgroundColor = 'white';
  }
});
email.addEventListener('change', () => {
  if (!email.textContent.match('/^[a-z]{1}[0-9]{9}@sakarya.edu.tr$/')) {
    gonderBtn.disabled = true;
    gonderBtn.style.backgroundColor = 'red';
  } else {
    gonderBtn.disabled = false;
    gonderBtn.style.backgroundColor = 'white';
  }
});
selection.addEventListener('click', () => {
  if (selection.children.item(0).value !== 'ilkokul') {
    gonderBtn.disabled = true;
    gonderBtn.style.backgroundColor = 'red';
  } else if (selection.children.item(1).value !== 'ortaokul') {
    gonderBtn.disabled = true;
    gonderBtn.style.backgroundColor = 'red';
  } else if (selection.children.item(2).value !== 'lise') {
    gonderBtn.disabled = true;
    gonderBtn.style.backgroundColor = 'red';
  } else if (selection.children.item(3).value !== 'universite') {
    gonderBtn.disabled = true;
    gonderBtn.style.backgroundColor = 'red';
  } else {
    gonderBtn.disabled = false;
    gonderBtn.style.backgroundColor = 'white';
  }
});

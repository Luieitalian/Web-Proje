// variables
const movieTitle = document.querySelector('.movie-title');
const movieDirector = document.querySelector('.movie-director');
const movieImdb = document.querySelector('.movie-imdb');
const movieDate = document.querySelector('.movie-date');

// api calls
const apiKey = 'e1915ec9';

async function setTitle() {
  const res = await fetch(
    `http://www.omdbapi.com/?apikey=${apiKey}&t=interstellar`
  );
  const data = await res.json();
  movieTitle.textContent = `Film: ${data.Title}`;
}
async function setDirector() {
  const res = await fetch(
    `http://www.omdbapi.com/?apikey=${apiKey}&t=interstellar`
  );
  const data = await res.json();
  movieDirector.textContent = `Yönetmen: ${data.Director}`;
}
async function setRating() {
  const res = await fetch(
    `http://www.omdbapi.com/?apikey=${apiKey}&t=interstellar`
  );
  const data = await res.json();
  movieImdb.textContent = `Puan: ${data.imdbRating}`;
}
async function setDate() {
  const res = await fetch(
    `http://www.omdbapi.com/?apikey=${apiKey}&t=interstellar`
  );
  const data = await res.json();
  movieDate.textContent = `Tarih: ${data.Released}`;
}
setRating();
setTitle();
setDate();
setDirector();

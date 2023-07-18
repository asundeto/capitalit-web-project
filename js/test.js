let url = 'https://6399833529930e2bb3d54218.mockapi.io/Post';

fetch(url)
    .then(res => res.json())
    .then(out =>
        console.log('Checkout this JSON! ', out))
    .catch(err => { throw err });
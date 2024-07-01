var books = {
  "books":[
      {
          "title":"Artificial Intelligence For Dummies",
          "img_src":"images/AI1.jpg",
          "link": "book-details.php?bookId=AI1"
      },
      {
          "title":"Countdown to Zero Day",
          "img_src":"images/CS1.jpg",
          "link": "book-details.php?bookId=CS1"
      },
      {
          "title":"Angular Projects",
          "img_src":"images/WT1.jpg",
          "link": "book-details.php?bookId=WT1"
      },
      {
          "title":"Data Science",
          "img_src":"images/DS3.jpg",
          "link": "book-details.php?bookId=DS3"
      },
      {
          "title":"Metasploit: The Penetration Tester's Guide",
          "img_src":"images/CS4.jpg",
          "link": "book-details.php?bookId=CS4"
      },
  ]
}

// function to cycle books in slider
function change_books(img_items, direction, books){

  // Get number of books in slider
  var num_books = img_items.length;

  // for going left get first book's img src attribute
  var first = img_items[0].querySelector('img').getAttribute("src");
  
  // for going right get last book img src
  var last = img_items[img_items.length - 1].querySelector('img').getAttribute("src");

  // if going left
  if(direction == 0){
      
      // find index of first book in books array
      var index = books.books.findIndex(book => book.img_src == first)

      // get all books before the current one
      var new_books = books.books.slice(index - num_books, index)

      // if there are not enough books
      if(new_books.length < num_books){
        // get more books from the end
        var additional_books = books.books.slice(books.books.length - (num_books - index), books.books.length)
        // add them to the new_books array
        new_books = additional_books.concat(books.books.slice(0, index))
      }
      
      // change img src and title of books in slider after 400ms
      setTimeout(function(){
          img_items.forEach((e, i)=>{
              e.querySelector('img').src = new_books[i].img_src
              e.querySelector('a').href = new_books[i].link
              e.querySelector('h4').innerHTML = new_books[i].title
          })
      }, 400)
  }

  // if going right
  if(direction == 1){
      
    // find index of first book in books
    var index = books.books.findIndex(book => book.img_src == last)
    
    // get all remaining books after the current one
    var new_books = books.books.slice(index + 1);

    // if there are not enough books
    if (new_books.length < num_books) {
        // get more books from the beginning
        var additional_books = books.books.slice(0, num_books - new_books.length);
        // add them to the new_books array
        new_books = new_books.concat(additional_books);
    }
    
    // change img src and title of books in slider after 400ms
    setTimeout(function(){
        img_items.forEach((e, i)=>{
            if(new_books[i]) {
                e.querySelector('img').src = new_books[i].img_src
                e.querySelector('a').href = new_books[i].link
                e.querySelector('h4').innerHTML = new_books[i].title
            }
        })
    }, 400)
  }
}

// function to move slider left
function slider_move_left(el){
  // get all img items in slider
  var img_items = el.closest('.book-slider').querySelectorAll('.img-item');

  // call change_books function to change books in slider
  change_books(img_items, 0, books)

  // if img_items exist, add fade-in and fade-out classes to them
  if(img_items){
      img_items.forEach((e, i)=>{
          e.classList.remove('fade-in');
          e.classList.add("fade-out")
          // remove fade-out class and add fade-in class after 500ms
          setTimeout(function() {
              e.classList.remove('fade-out');
              e.classList.add('fade-in');
          }, 500);
      });
  }
}

// function to move slider right
function slider_move_right(el){
  var img_items = el.closest('.book-slider').querySelectorAll('.img-item');

  change_books(img_items, 1, books)
  
  if(img_items){
      img_items.forEach((e, i)=>{
          e.classList.remove('fade-in');
          e.classList.add("fade-out")
          setTimeout(function() {
              e.classList.remove('fade-out');
              e.classList.add('fade-in');
          }, 500);
      });
  }
}

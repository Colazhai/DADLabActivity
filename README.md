# DADLabActivity
Assignment 2 for subject Distribution Application Development to develop a application using public REST API. This application use Google Book API to do Volume Search. The application is using php language to request from the api server and get the return value (JSON value) from the api server. Book details will be output using table.

API link used
https://www.googleapis.com/books/v1/volumes?q=search+terms

Response
{
 "kind": "books#volumes",
 "totalItems": 5428,
 "items": [
  {
   "kind": "books#volume",
   "id": "WDVbAAAAMAAJ",
   "etag": "fp7NWkJULVo",
   "selfLink": "https://www.googleapis.com/books/v1/volumes/WDVbAAAAMAAJ",
   "volumeInfo": {
    "title": "H",
    "subtitle": "A Novel",
    "authors": [
     "Elizabeth Shepard"
    ],
    "publisher": "Viking Press",
    "publishedDate": "1995",
    "description": "Benjamin Moorhouse, a troubled twelve-year-old, has created a world for himself that others call \"mad,\" a world gently and sometimes humorously evoked through letters written by his mother, his psychiatrist, and by Benjamin himself. A first novel. 15,000 first printing.",
    "industryIdentifiers": [
     {
      "type": "OTHER",
      "identifier": "UOM:39015034015811"
     }
    ],
    "readingModes": {
     "text": false,
     "image": false
    },
    "pageCount": 160,
    "printType": "BOOK",
    "categories": [
     "Fiction"
    ],
    "maturityRating": "NOT_MATURE",
    "allowAnonLogging": false,
    "contentVersion": "0.1.1.0.preview.0",
    "imageLinks": {
     "smallThumbnail": "http://books.google.com/books/content?id=WDVbAAAAMAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api",
     "thumbnail": "http://books.google.com/books/content?id=WDVbAAAAMAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api"
    },
    "language": "en",
    "previewLink": "http://books.google.com.my/books?id=WDVbAAAAMAAJ&q=h&dq=h&hl=&cd=1&source=gbs_api",
    "infoLink": "http://books.google.com.my/books?id=WDVbAAAAMAAJ&dq=h&hl=&source=gbs_api",
    "canonicalVolumeLink": "https://books.google.com/books/about/H.html?hl=&id=WDVbAAAAMAAJ"
   },
   "saleInfo": {
    "country": "MY",
    "saleability": "NOT_FOR_SALE",
    "isEbook": false
   },
   "accessInfo": {
    "country": "MY",
    "viewability": "NO_PAGES",
    "embeddable": false,
    "publicDomain": false,
    "textToSpeechPermission": "ALLOWED",
    "epub": {
     "isAvailable": false
    },
    "pdf": {
     "isAvailable": false
    },
    "webReaderLink": "http://play.google.com/books/reader?id=WDVbAAAAMAAJ&hl=&printsec=frontcover&source=gbs_api",
    "accessViewStatus": "NONE",
    "quoteSharingAllowed": false
   },
   "searchInfo": {
    "textSnippet": "Benjamin Moorhouse, a troubled twelve-year-old, has created a world for himself that others call &quot;mad,&quot; a world gently and sometimes humorously evoked through letters written by his mother, his psychiatrist, and by Benjamin himself."
   }
  }
Screenshots
alt text alt text

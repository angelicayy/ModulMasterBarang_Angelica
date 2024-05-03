<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksshop - Book Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <style>
        .book {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .book-title {
            color: #007bff;
        }
        .book-meta {
            color: #6c757d;
            font-style: italic;
        }
        .book-content {
            color: #343a40;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="book text-center">
                    <img class="img-fluid mb-4" src="https://down-id.img.susercontent.com/file/sg-11134201-7rbne-lnllpdirg2aw3e" alt="Book Image">
                    <h2 class="book-title">Bookshop - Novel Books</h2>
                    <p class="book-meta">Author: Angel</p>
                    <p class="book-content">"Bookshop - Novel Books" is a captivating novel that takes readers on a journey through the lives of its diverse characters, exploring themes of love, loss, and redemption. Set in a quaint bookstore in a small town, the story unfolds as the characters navigate through their own personal struggles and relationships. With beautifully crafted prose and compelling storytelling, this book is sure to captivate readers from start to finish.</p>
                    <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/welcome.blade.php ENDPATH**/ ?>
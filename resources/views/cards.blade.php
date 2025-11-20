<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>
    <style>
        .cards {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .card {
            width: 250px;
            background: white;
            padding: 15px;
            border: 1px solid grey;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .card-img img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .card-category {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
        }

        .card-price {
            font-size: 20px;
            font-weight: bold;
            color: #0f7c90;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Our Products</h1>

        @foreach ($products as $Product)

                <div class="cards">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ $Product["image"] }}" alt="">
                        </div>
                        <div class="card-title">
                            {{ $Product["title"]}}
                        </div>
                        <div class="card-category">
                            {{ $Product["category"] }}
                        </div>
                        <div class="card-price">
                            {{ $Product["price"] }}
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
</body>

</html>
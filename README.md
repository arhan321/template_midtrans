template midtrans laravel sederhana, dan belum memiliki callback kemanapun

# how to use :

# step 1
```
git clone https://github.com/arhan321/template_midtrans.git
```

# step 2 
```
docker compose up -d --build 
```

# step 3 
```
docker exec -it php_coba bash
```

# step 4 
```
composer update 
```

# step 5 
```
php artisan storage:link
```

# step 6 
```
php artisan migrate
```

# step 7
```
chmod 777 -R storage/*
```

# step 8 
```
php artisan key:generate
```

# step 8 
```
mv .env.example 
```

# step 9 (set merchant, server_key, client_key) 
```
MIDTRANS_MERCHANT_ID=your_merchant_id
MIDTRANS_SERVER_KEY=your_server_key
MIDTRANS_CLIENT_KEY=your_client_key
```

# step 10 
```
Happy coding and use payment gateway
```


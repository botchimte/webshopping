<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Navbar Example</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <img src="data:image/png;base64,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">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
         <!-- Brand -->
         <a class="navbar-brand" href="#">Home</a>
 
         <!-- Links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="#">Laptop</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Smartphone</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               Other
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="login.html">Login</a>
                  <a class="dropdown-item" href="register.html">Register</a>
               </div>
            </li>
         </ul>
 
      </nav>
 
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

      <section>
         <article>
            <h1>Iphone 12</h1>
            <p>IPHONE 12 MINI 128GB - CHÍNH HÃNG</p> <br>
            <img src="https://philong.com.vn/media/product/250-23651-duong.png" alt="" width="100%" height="300px">
            <div class="price">20.000.000 VND</div>
            <ul>
               <li>Trả góp lãi suất 0% áp dụng cho thẻ tín dụng</li>
               <li>Trả góp lãi suất ưu đãi thông qua cổng MP</li>
            </ul>
            <button>Purchase it</button>
         </article>
         <article>
            <h1>Laptop Gaming MSI GF63</h1>
            <p>LAPTOP MSI GF65 THIN 10UE-228VN (I7-10750H, RAM 16GB, SSD</p>
            <img src="https://philong.com.vn/media/product/250-24081-11.jpg" alt="" width="100%" height="300px">
            <div class="price">30.000.000 VND</div>
            <ul>
               <li>CPU: Intel Core i7-10750H</li>
               <li>Ram: 16GB DDR4 2666MHz</li>
               <li>Lưu trữ: 512GB SSD M.2 PCIE</li>
            </ul>
            <button>Purchase it</button>
         </article>
         <article>
            <h1>Ghế Gaming</h1>
            <p>GHẾ ALPHA GAMER POLARIS OFFICE SERIES</p>
            <img src="https://philong.com.vn/media/product/250-20437-9n24lyoklydhn.jpg" alt="" width="100%" height="300px">
            <div class="price">3.400.000 VND</div>
            <ul>
               <li>Kê tay điều chỉnh 4D</li>
               <li>Da PU với mặt lưng thiết kế hình kim cương sang trọng lịch lãm</li>
            </ul>
            <button>Purchase it</button>
         </article>
      </section>
   </body>
</html>
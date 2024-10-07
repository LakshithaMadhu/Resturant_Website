<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fast Foods Restuarant</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
  </head>
  <body>
    <nav>
      <div class="logo-row">
        <img
          src="res-logo-removebg-preview.png"
          alt=""
          width="25px"
          height="35px"
        />
        <h2 class="title">Feastly</h2>
      </div>

      <section>
        <ul>
          <li><a href="#" class="home">Home</a></li>
          <li><a href="about.html"">About</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="signin.html">Account</a></li>
          <li><a href="service.html">Service</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li>
            <a href="#"><button class="booking">Booking</button></a>
          </li>
        </ul>
      </section>
    </nav>

    <div class="main">
      <h1 class="main-title">Fast Food Restuarant</h1>
      <p>
        Indulge in a Variety of Quick and Delicious<br />
        Meals, Perfectly Prepared for Your Busy<br />Lifestyle
      </p>
      <button>Order Now</button>
    </div>

    <div class="story">
      <h3>Our Story</h3>
      <h1>We Are Providing Great & Delicious Food About Twenty Years</h1>
      <p>
        For twenty years, we have been dedicated to serving delicious,
        high-quality fast food. From our burgers and savory rice and curry to
        our delightful egg rice, creamy pasta, flavorful kottu, and crispy
        chicken wings, every dish is crafted with care and passion. <br />
        <br />Our commitment to excellent cuisine and warm hospitality has made
        us a beloved spot for friends and families. We thank our loyal customers
        for their support and look forward to many more years of serving you.
        Thank you for being part of our journey.
      </p>
    </div>

    <div class="cards">
      <h1>We Offer Top Notch</h1>
      <p>
        Indulge in Exquisite Dishes Crafted with Fresh Ingredients and
        Passionate Expertise
      </p>
      <div class="row">
        <div class="card">
          <img src="./images/food.jpg" alt="" />
          <h3>Appetizers</h3>
          <button>Read More</button>
        </div>
        <div class="card">
          <img src="./Images/breakfast.jpg" alt="" />
          <h3>Breakfast</h3>
          <button>Read More</button>
        </div>
        <div class="card">
          <img src="./Images/drinks.jpg" alt="" />
          <h3>Drinks</h3>
          <button>Read More</button>
        </div>
      </div>
    </div>

   <!--  <div class="menu">
      <h2 class="menu-title">Delicious Menu</h2>
      <div class="column">
        <div class="item">
          <img src="item1.jpg" alt="" class="item-img" />
          <div class="description">
            <div class="title-row">
              <h4>Juicy Classic Burger</h4>

              <p>50$</p>
            </div>

            <p>
              A perfectly grilled patty with fresh lettuce, ripe tomatoes,
              <br />
              and tangy sauce on a toasted bun.
            </p>
          </div>
        </div>

        <div class="item">
          <img src="item3.jpg" class="item-img" alt="" />
          <div class="description">
            <div class="title-row">
              <h4>Heavenly Pasta Delight</h4>
              <p>50$</p>
            </div>
            <p>
              Al dente noodles in a creamy or tomato sauce, topped <br />
              with fresh herbs and Parmesan.
            </p>
          </div>
        </div>

        <div class="item">
          <img src="item1.jpg" alt="" class="item-img" />
          <div class="description">
            <div class="title-row">
              <h4>Juicy Classic Burger</h4>
              <p>50$</p>
            </div>

            <p>
              A perfectly grilled patty with fresh lettuce, ripe tomatoes,
              <br />
              and tangy sauce on a toasted bun.
            </p>
          </div>
        </div>

        <div class="item">
          <img src="item3.jpg" class="item-img" alt="" />
          <div class="description">
            <div class="title-row">
              <h4>Heavenly Pasta Delight</h4>
              <p>50$</p>
            </div>
            <p>
              Al dente noodles in a creamy or tomato sauce, topped <br />
              with fresh herbs and Parmesan.
            </p>
          </div>
        </div>

        <div class="item">
          <img src="item1.jpg" alt="" class="item-img" />
          <div class="description">
            <div class="title-row">
              <h4>Juicy Classic Burger</h4>
              <p>50$</p>
            </div>

            <p>
              A perfectly grilled patty with fresh lettuce, ripe tomatoes,
              <br />
              and tangy sauce on a toasted bun.
            </p>
          </div>
        </div>

        <div class="item">
          <img src="item3.jpg" class="item-img" alt="" />
          <div class="description">
            <div class="title-row">
              <h4>Heavenly Pasta Delight</h4>
              <p>50$</p>
            </div>
            <p>
              Al dente noodles in a creamy or tomato sauce, topped <br />
              with fresh herbs and Parmesan.
            </p>
          </div>
        </div>
      </div>
    </div> -->

    <div class="menu-container">
      <h1 class="menu-title">Delicious Menu</h1>
      <div class="menu-grid">
          <div class="menu-item">
              <img src="./Images/burger1.jpeg" alt="Juicy Classic Burger">
              <div class="menu-text">
                  <h2>Juicy Classic Burger</h2>
                  <p>A perfectly grilled patty with fresh lettuce, ripe tomatoes, and tangy sauce on a toasted bun.</p>
              </div>
              <span class="price">$50</span>
          </div>

          <div class="menu-item">
              <img src="./images/Five-Spice-Chicken-Wings.jpg" alt="Crispy Chicken Wings">
              <div class="menu-text">
                  <h2>Crispy Chicken Wings</h2>
                  <p>Golden-fried wings, crispy outside and juicy inside, served with your choice of dip.</p>
              </div>
              <span class="price">$50</span>
          </div>

          <div class="menu-item">
              <img src="./images/rice_and_curry.jpeg" alt="Authentic Rice and Curry">
              <div class="menu-text">
                  <h2>Authentic Rice and Curry</h2>
                  <p>Fluffy rice served with a rich, aromatic curry, full of spices and tender meat or vegetables.</p>
              </div>
              <span class="price">$90</span>
          </div>

          <div class="menu-item">
              <img src="./images/egg_fried_rice.jpeg" alt="Savory Egg Fried Rice">
              <div class="menu-text">
                  <h2>Savory Egg Fried Rice</h2>
                  <p>Stir-fried rice with scrambled eggs and fresh veggies, seasoned with soy sauce.</p>
              </div>
              <span class="price">$90</span>
          </div>

          <div class="menu-item">
              <img src="./images/pasta.jpeg" alt="Heavenly Pasta Delight">
              <div class="menu-text">
                  <h2>Heavenly Pasta Delight</h2>
                  <p>Al dente noodles in a creamy or tomato sauce, topped with fresh herbs and Parmesan.</p>
              </div>
              <span class="price">$100</span>
          </div>

          <div class="menu-item">
              <img src="./images/kottu_roti.jpeg" alt="Traditional Kottu Roti">
              <div class="menu-text">
                  <h2>Traditional Kottu Roti</h2>
                  <p>A spicy stir-fry of chopped flatbread, vegetables, eggs, and meat, straight from Sri Lanka.</p>
              </div>
              <span class="price">$100</span>
          </div>
      </div>
  </div>

    <h3 class="thanks">
      Thank you for choosing our restaurant! We are excited to have you dine
      with us and want to make the reservation process as easy as possible.
      Please complete the form below to book your table. We look forward to
      providing you with a memorable dining experience.
      <br />
      <br />
      See you soon!
    </h3>

    <div class="owner">
      <img src="./images/owner.png" alt="" width="150px" />
    </div>

    <div class="form-section">
      <div class="form">
        <h1>Make Online Reservation</h1>
        <p>
          Enjoy a seamless dining experience by reserving your table in advance.
        </p>
        <form action="#">
          <table>
            <tr>
              <td>Name</td>
              <td><input type="text" required/></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="email" required /></td>
            </tr>
            <tr>
              <td>Date</td>
              <td><input type="date" required/></td>
            </tr>
            <tr>
              <td>Time</td>
              <td><input type="time" required/></td>
            </tr>
            <tr>
              <td>No of Guests</td>
              <td><input type="number" required/></td>
            </tr>
            <tr>
              <td>Special Requests</td>
              <td><textarea name="" id=""></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><button>Submit</button></td>
            </tr>
          </table>
        </form>
      </div>

      <div class="contact">
        <h1>Contact Us</h1>
        <p>Contact Details</p>
        <p>011 876 8980</p>
        <p>Location</p>
        <p>Colombo</p>
      </div>
    </div>

    <div class="bottom-section">
      <h1>Our Strength</h1>
      <div class="bottom-cards">
        <div class="bottom-card">
          <img src="./images/logo.jpg" alt="" />
          <h3>Online Reservations</h3>
          <p>
            Planning your visit has never been easier. With our simple online
            reservation system, you can effortlessly book your table and look
            forward to a hassle-free dining experience.
          </p>
        </div>

        <div class="bottom-card">
          <img src="./images/logo.jpg" alt="" />
          <h3>Hygiene and Safety</h3>
          <p>
            We adhere to the highest standards of cleanliness and food safety,
            ensuring a safe and healthy environment for our guests.
          </p>
        </div>

        <div class="bottom-card">
          <img src="./images/logo.jpg" alt="" />
          <h3>Delicious and Diverse Menu</h3>
          <p>
            Savor our juicy burgers, rice and curry, egg fried rice, pasta,
            kottu roti, and chicken wings. Fresh, high-quality ingredients in
            every dish.
          </p>
        </div>

        <div class="bottom-card">
          <img src="./images/logo.jpg" alt="" />
          <h3>Exceptional Customer Service</h3>
          <p>
            Your satisfaction is our top priority. Our team is attentive,
            professional, and ready to cater to your needs, ensuring that every
            visit is a pleasant and memorable one.
          </p>
        </div>
      </div>
    </div>

    <div class="outro">
      <h1>Feastly</h1>
      <p>Avenue 6th floor Nawala,Colombo</p>
    </div>
  </body>

  <div class="bottom">
    <div class="row">
      <div class="info">
        <h1>Feastly</h1>
        <p>
          www.Feastly.com <br />
          +94 45 567 8907 <br />
          Avenue 6th floor Nawala,Colombo
        </p>
      </div>

      <div class="menu-nav">
        <h1>Our Menu</h1>
        <a href="#">Breakfast</a>
        <a href="#">Lunch</a>
        <a href="#">Dinner</a>
        <a href="#">Appetizer</a>
      </div>

      <div class="info-nav">
        <h1>Information</h1>
        <a href="#">About Us</a>
        <a href="#">Blog</a>
      </div>

      <div class="useful-nav">
        <h1>Useful Links</h1>
        <a href="#">Service</a>
        <a href="#">Help & Support</a>
        <a href="#">Terms & Condition</a>
      </div>

      <div class="useful-nav">
        <h1>Social</h1>
        <a href="#">Facebook</a>
        <a href="#">Instagram</a>
        <a href="#">Youtube</a>
      </div>
    </div>
  </div>
</html>

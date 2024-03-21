<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fonts.css">
    </head>

    <body>
    <div class="form-container">
            <header>
                <div class="logo"></div>
                <div class="container-details">
                    <h1> philippine red amity Volunteer Services </h1>
                    <p> 123 Rizal Avenue, Barangay Poblacion 5, Bacolod City, Negros Occidental, 6100 </p>
                    <hr/>

                    <div class="container-socials">
                        <div class="social-link">
                            <div class="icon fb" ></div>
                            <p> Red Amity Volunteer PH </p>
                        </div>
                        <div class="social-link">
                            <div class="icon ig" ></div>
                            <p> @redamityph </p>
                        </div>
                        <div class="social-link">
                            <div class="icon yt" ></div>
                            <p> Red Amity PH </p>
                        </div>
                        <div class="social-link">
                            <div class="icon email" ></div>
                            <p> redamityph@gmail.com </p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="label-container">
                <img src="img/icon-back.png" class="back-bttn" onclick="location.href = 'index.php'">
                <p class="label"> add inventory </p>
            </div>
            <main>
                <form>
                    <h1> Enter Primary Information </h1>
                    <div class="input-container">
                        <div class="fgrow-1">
                            <p> Brandname </p> 
                            <input type = "text">
                        </div>
                        <div class="fgrow-1">
                            <p> Item Type </p>
                            <input type = "text">
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="fgrow-1">
                            <p> Date of Purchase </p> 
                            <input type = "date">
                        </div>
                        <div class="quantity-container fgrow-1">
                            <p> Quantity </p> 
                            <input type = "number">
                        </div>
                        <div class="fgrow-3">
                            <p> Distributor </p> 
                            <input type = "text">
                        </div>
                    </div>

                    <hr/>
                    <h1> Enter Other Details </h1>
                    <div class="input-container m-0">
                        <div class="fgrow-1">
                            <p> Description </p> 
                            <textarea></textarea>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="fgrow-1">
                            <p> Remarks </p> 
                            <textarea></textarea>
                        </div>
                    </div>

                    <br/>
                    <div class="input-container">
                        <input type="submit" class="bttn-primary fgrow-1" value="Add to Inventory">
                        <button class="bttn-cancel" onclick="event.preventDefault(); location.href = 'index.php'"> Cancel </button>
                    </div>
                </form>  
            </main>       
        </div>
    </body>
</html>
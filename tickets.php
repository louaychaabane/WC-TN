<?php 
  //include 'db.php';
  include 'controller/ticketController.php';
  
    
  $tickets = showTickets($connexion4)

  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Book Ticket &mdash; Tunisia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
   
    
  }

  .formbold-form-wrapper {
    
    margin: 100px;
    max-width: 550px;
    width: 100%;
    background: #1A1E25;
    padding:43.5px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }

  .formbold-input-radio-wrapper {
    margin-bottom: 28px;
  }
  .formbold-radio-flex {
    display: flex;
    align-items: center;
    gap: 15px;
  }
  .formbold-radio-label {
    font-size: 14px;
    line-height: 24px;
    color: #07074D;
    position: relative;
    padding-left: 25px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .formbold-input-radio {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  .formbold-radio-checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #FFFFFF;
    border: 1px solid #DDE3EC;
    border-radius: 50%;
  }
  .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark {
    background-color: #6A64F1;
  }
  .formbold-radio-checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark:after {
    display: block;
  }

  .formbold-radio-label .formbold-radio-checkmark:after {
    top: 50%;
    left: 50%;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #FFFFFF;
    transform: translate(-50%, -50%);
  }

  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #DDE3EC;
    background: #FFFFFF;
    font-weight: 500;
    font-size: 16px;
    color: #07074D;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder {
    color: #536387;
  }
  .formbold-form-input:focus {
    border-color: #ee1e46;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    border: 2px solid #ee1e46;
  }
  .formbold-form-label {
    color: white;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #ee1e46;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .bloc {
  display: flex;


}

/*Réinitilaisation de la liste déroulante*/
select {
  appearance: none;
  outline: 0;
  border: 0 !important;
  background: #F9F9F9;
  background-image: none;
  box-shadow: none;
  font-size: 1.2em;
}

/*Ajout des couleurs de fond pour chaque option */
select option[value="1"] {
  background: #;
  color: white;
}

select option[value="2"] {
  background: #107C11;
  color: white;
}

select option[value="3"] {
  background: #E70009;
  color: white;
}

select option[value="4"] {
  background: black;
  color: white;
}

/* Mise en forme de la div .select*/
.select {
  position: relative;
  width: 350px;
  height: 45px;
  overflow: hidden;
  border-radius: 5px;
  border: 1px solid #CED4DA;
}

/* Mise en forme de la balise select*/
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding-left: 15px;
  color: #555555;
  cursor: pointer;
}


/* Mise en place de la flèche */
.select::after {
  content: '\276F';
  position: absolute;
  top: 20%;
  right: 0;
  padding: 0 15px;
  background: white;
  pointer-events: none;
  transform: rotate(90deg);
  font-size: 1.5em;
  background: #F9F9F9;
}


.select:hover::after {
  color: #FA6141;
}
.formcontain{
    background: #0D0F13;
}
#cancelBtn{
  color: white;
  text-align: center;
  border: 2px solid #ee1e46;
  border-radius:7px;
  padding: 14px 25px;
  margin-top:10px;
  width:100%; 
  background-color:transparent;
}
 </style>


</head>

<div class="formcontain">



<div class="formbold-main-wrapper">

  <div style="border-radius:" class="formbold-form-wrapper">
      <h1 style="color:white;text-align: center">PAYMENT</h1>
      <br>
      
    <form action="formHandler.php" method="POST">
        <div class="formbold-input-flex">
          <div>
              <label for="firstname" class="formbold-form-label"> First name </label>
              <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="First name"
              class="formbold-form-input"
              />
          </div>
          <div>
              <label for="lastname" class="formbold-form-label"> Last name </label>
              <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Last name"
              class="formbold-form-input"
              />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
              <label for="email" class="formbold-form-label"> Mail </label>
              <input
              type="email"
              name="email"
              id="email"
              placeholder="name@mail.com"
              class="formbold-form-input"
              />
          </div>
          <div>
              <label for="phone" class="formbold-form-label"> Phone </label>
              <input
              type="text"
              name="phone"
              id="phone"
              placeholder="+216 "
              class="formbold-form-input"
              />
          </div>
        </div>
        

        <div class="formbold-input-radio-wrapper">
            <label for="jobtitle" class="formbold-form-label"> Choose Your tickets </label>
            <div class="bloc">
            <div class="select">
            
            <select name="tickets" id="selected">
            <?php 
                    
              foreach($tickets as $ticket){
                              
            ?>
            
            <option value=<?=$ticket["id_ticket"]?>><?php echo $ticket["matches"]."  &bullet;  ".$ticket["prices"]."TND"; ?></option>
            <?php } ?>
            </select>
        </div>
        
        
    </div>
            
        </div>

        


        <button class="formbold-btn">
            Confirm
        </button>
        
    </form>
    <button onClick="location.href='index.php'" id="cancelBtn">Cancel</button>
    
  </div>
  
</div>
</div>

</body>
</html>
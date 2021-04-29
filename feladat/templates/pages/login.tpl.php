<div>	<?php
	session_start();
?>

                    <h1> Regisztráció </h1>

                    <form action="regisztracio.php" method="post">


                        <label for="felhasznalo">Felhasználó név:</label>
                        <input type="text" id="felhasznalo" name="felhasznalo" required="required" minlength="5"><br><br>



                        <label for="vezeteknev">Vezeték név:</label>
                        <input type="text" id="vezeteknev" name="vezeteknev" required="required" minlength="1"><br><br>



                        <label for="utonev">Kereszt név:</label>
                        <input type="text" id="utonev" name="utonev" required="required" minlength="1"><br><br>



                        <label for="jelszo">Jelszó:</label>
                        <input type="password" id="jelszo" name="jelszo" required="required" minlength="5"><br><br>



                        
                        <input type="submit" class="button" value="Register">


                    </form>

                </div>
                <div>
                <div>
                    <h1> Belepes </h1>

                    <form action="belepes.php" method="post">


                        <label for="felhasznalo">Felhasznalo nev:</label>
                        <input type="text" id="felhasznalo" name="felhasznalo" required="required" minlength="5"><br><br>



                        <label for="jelszo">Jelszo:</label>
                        <input type="password" id="jelszo" name="jelszo" required="required" ><br><br>
                        <input type="submit" class="button" value="Login" minlength="5">


                    </form>
                </div>
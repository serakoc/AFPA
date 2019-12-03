
        var PU=prompt("prix unitaire");;
        var quantite=prompt("quantité");
        var PAP;
        var PORT = 0;
        var REM;
        var TOT = PU*quantite;
        console.log(TOT);
        if(TOT>500)
        {
            PORT = 0;
        }
        else 
        {
            //PORT = TOT*0.02;
            if(PORT < 6)
            {
                PORT = 6;
            }
        }
        console.log(PORT);
        if(TOT>=100 && TOT<=200)
        {
            REM = 0.95;
        }
        else if(TOT>200)
        {
            REM = 0.9;
        }
        console.log(REM);
        PAP = (TOT + PORT)*REM;
        console.log(PAP);
        document.write(PAP);
        alert(PAP);
  
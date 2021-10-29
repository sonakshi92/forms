<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
Select:
<select>
    <option value="select 1">1</option>
    <option value="select 2">2</option>
    <option value="select 3">3</option>
    <option value="select 4">4</option>
    <option value="select 5">5</option>
    <option value="select 6">6</option>
</select>   
<br> 
Check Box select any 2 Pet:
<input type="checkbox" name="pet" onclick="return ValidatePetSelection();" value="cats">Cats<br>
<input type="checkbox" name="pet" onclick="return ValidatePetSelection();" value="dogs">Dogs<br>
<input type="checkbox" name="pet" onclick="return ValidatePetSelection();" value="fishes">Fishes<br>
<input type="checkbox" name="pet" onclick="return ValidatePetSelection();" value="birds">Birds<br>
<input type="checkbox" name="pet" onclick="return ValidatePetSelection();" value="rabbits">Rabbits<br>

Radio Button:
<input type="radio" name="country" id="">
<input type="submit" value="Submit now">  
    </fieldset>  
</form>
  

<script type="text/javascript">  
function ValidatePetSelection()  
{  
    var checkboxes = document.getElementsByName("pet");  
    var numberOfCheckedItems = 0;  
    for(var i = 0; i < checkboxes.length; i++)  
    {  
        if(checkboxes[i].checked)  
            numberOfCheckedItems++;  
    }  
    if(numberOfCheckedItems > 2)  
    {  
        alert("You can't select more than two pets!");  
        return false;  
    }  
}  
</script>
</body>
</html>
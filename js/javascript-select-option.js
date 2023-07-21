function insertValue1(){
      var select = document.getElementById("select1"),
      txtVal = document.getElementById("val1").value,
      newOption = document.createElement("OPTION"),
      newOptionVal = document.createTextNode(txtVal);

      newOption.appendChild(newOptionVal);
      select.insertBefore(newOption,select.firstChild);

    }

     function insertValue2(){
      var select = document.getElementById("select2"),
      txtVal = document.getElementById("val2").value,
      newOption = document.createElement("OPTION"),
      newOptionVal = document.createTextNode(txtVal);

      newOption.appendChild(newOptionVal);
      select.insertBefore(newOption,select.firstChild);

    }
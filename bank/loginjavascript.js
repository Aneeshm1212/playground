var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    customer = JSON.parse(this.responseText);
  }
};
xmlhttp.open("GET", "read/getcustomer.php", true);
xmlhttp.send();

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    employee = JSON.parse(this.responseText);
  }
};

xmlhttp.open("GET", "read/getemployee.php", true);
xmlhttp.send();
<html>
<body>
<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
    <div id="tid" class="dropdown-content">
        <a href="#">08.00</a>
        <a href="#">09.00</a>
        <a href="#">10.00</a>
        <a href="#">11.00</a>
        <a href="#">12.00</a>
        <a href="#">13.00</a>
        <a href="#">14.00</a>
        <a href="#">15.00</a>
        <a href="#">16.00</a>
        <a href="#">17.00</a>
        <a href="#">18.00</a>
        <a href="#">19.00</a>
    </div>
</div>
<script>
    function myFunction() {
        document.getElementById("tid").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
    }
</script>


</body>
<html>
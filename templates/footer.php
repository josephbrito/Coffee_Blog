<footer class="footer">
    <h4>&copy; JOSÉ DE BRITO</h4>
</footer>

<script>
    const getUri = window.location.pathname;
    
    const home = document.getElementById("home");
    const about = document.getElementById("about");

    if(getUri == "/curso/web"){
        home.classList.add("home_active");
        about.classList.remove("about_active");
    }else if(getUri == "/curso/web/about.php"){
        home.classList.remove("home_active");
        about.classList.add("about_active");
    }else{
        home.classList.add("home_active");
        about.classList.remove("about_active");
    }
</script>
</body>
</html>
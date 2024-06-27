<?php $appVersion = env('APP_VERSION', '1.0.0'); ?>
<footer class="footer bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>Liens rapides</h5>
                <ul class="list-unstyled">
                    <li><a href="/home">Accueil</a></li>
                    <li><a href="/results/1">Services</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; Version: {{ env('APP_VERSION') }}</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

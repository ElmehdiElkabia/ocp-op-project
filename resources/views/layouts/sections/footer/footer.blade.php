<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
    <div
        class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            © <script>
            document.write(new Date().getFullYear())
            </script>
            , developper by <a
                href="{{ (!empty(config('variables.creatorUrl')) ? config('variables.creatorUrl') : '') }}"
                target="_blank" class="footer-link fw-medium">Elmehdi ELkabia & Badr Eddine Diyaf</a>
        </div>

    </div>
</footer>
<!--/ Footer-->
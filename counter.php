<!-- Globalny licznik odwiedzin -->
<div class="visit-counter">
    Łączna liczba odwiedzin: <span id="visit-count">...</span>
</div>

<script>
    (function fetchGlobalCounter() {
        // Podmień 'biuro-karczewski-unique-key-12345' na własny, unikalny identyfikator
        const key = 'biuro-karczewski-unique-key-12345';
        
        fetch(`https://api.countapi.xyz/hit/${key}/visits`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('visit-count').textContent = data.value;
            })
            .catch(error => {
                console.error('Błąd licznika:', error);
                document.getElementById('visit-count').textContent = '—';
            });
    })();
</script>

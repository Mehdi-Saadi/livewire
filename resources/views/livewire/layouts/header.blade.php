<div>
    <ul class="mt-4">
        <li>Home</li>
        <li>About</li>
    </ul>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.on('forTest', (value) => {
                console.log('for test ran in frontend', value);
            })
        });

        window.addEventListener('show-notification', (event) => {
            // alert('show notification');
            let {title, body} = event.detail;
            console.log(title, body);
        })
    </script>
</div>

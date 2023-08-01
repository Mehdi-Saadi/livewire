<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3>Register page</h3>
                <form wire:submit.prevent="register">
                    <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model.lazy="name" autocomplete="off">
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model.lazy="email" autocomplete="off">
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model.lazy="password" autocomplete="off">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">sign up</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
                console.log('component.initialized', component);
            })
            Livewire.hook('element.initialized', (el, component) => {
                console.log('element.initialized', el, component);
            })
            Livewire.hook('element.updating', (fromEl, toEl, component) => {
                console.log('element.updating', fromEl, toEl, component);
            })
            Livewire.hook('element.updated', (el, component) => {
                console.log('element.updated', el, component);
            })
            Livewire.hook('element.removed', (el, component) => {
                console.log('element.removed', el, component);
            })
            Livewire.hook('message.sent', (message, component) => {
                console.log('message.sent', message, component);
            })
            Livewire.hook('message.failed', (message, component) => {
                console.log('message.failed', message, component);
            })
            Livewire.hook('message.received', (message, component) => {
                console.log('message.received', message, component);
            })
            Livewire.hook('message.processed', (message, component) => {
                console.log('message.processed', message, component);
            })
        });
    </script>
</div>

<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3>Register page</h3>
                <form wire:submit.prevent="register" wire:loaidng.remove>
                    <div class="form-group mt-2">
                        <label for="file">Avatar</label>
                        <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="file" wire:model.lazy="avatar">
                        @error('avatar')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
{{--                        <span class="mt-2 mx-2 text-primary" wire:target="avatar" wire:loading>uploading...</span>--}}
                        <div class="progress mt-3" id="progressbar" style="display: none" wire:ignore>
                            <div class="progress-bar" style="width: 0%">0%</div>
                        </div>
                    </div>
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
                <span class="mt-2 text-primary" wire:target="register" wire:loading>Handling form..</span>
            </div>
        </div>
    </div>
{{--    <script>--}}
{{--        document.addEventListener("DOMContentLoaded", () => {--}}
{{--            Livewire.hook('component.initialized', (component) => {--}}
{{--                console.log('component.initialized', component);--}}
{{--            })--}}
{{--            Livewire.hook('element.initialized', (el, component) => {--}}
{{--                console.log('element.initialized', el, component);--}}
{{--            })--}}
{{--            Livewire.hook('element.updating', (fromEl, toEl, component) => {--}}
{{--                console.log('element.updating', fromEl, toEl, component);--}}
{{--            })--}}
{{--            Livewire.hook('element.updated', (el, component) => {--}}
{{--                console.log('element.updated', el, component);--}}
{{--            })--}}
{{--            Livewire.hook('element.removed', (el, component) => {--}}
{{--                console.log('element.removed', el, component);--}}
{{--            })--}}
{{--            Livewire.hook('message.sent', (message, component) => {--}}
{{--                console.log('message.sent', message, component);--}}
{{--            })--}}
{{--            Livewire.hook('message.failed', (message, component) => {--}}
{{--                console.log('message.failed', message, component);--}}
{{--            })--}}
{{--            Livewire.hook('message.received', (message, component) => {--}}
{{--                console.log('message.received', message, component);--}}
{{--            })--}}
{{--            Livewire.hook('message.processed', (message, component) => {--}}
{{--                console.log('message.processed', message, component);--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = progressSection.querySelector('.progress-bar');
            document.addEventListener('livewire-upload-start', () => {
                console.log('start');
                progressSection.style.display = 'block';
            })
            document.addEventListener('livewire-upload-finish', () => {
                console.log('finish');
                progressSection.style.display = 'none';
            })
            document.addEventListener('livewire-upload-error', () => {
                console.log('error');
                progressSection.style.display = 'none';
            })
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            })
        })
    </script>
</div>

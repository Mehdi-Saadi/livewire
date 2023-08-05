<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3>Upload Files</h3>
                <form wire:submit.prevent="handleForm">
                    <div class="form-group row">
                        <label for="input" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control @error('files') is-invalid @enderror" id="input" multiple wire:model="files">
                            @error('files')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    @if(count($files))
                        <div>
                            @foreach($files as $file)
                                <img src="{{ $file->temporaryUrl() }}" alt="">
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

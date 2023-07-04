<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<style>
    .required {
        position: relative;
        color: red;
    }

    .required:hover::after {
        content: attr(data-tooltip);
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px;
        background-color: red;
        color: #fff;
        border-radius: 4px;
        white-space: nowrap;
        color: white;
    }
</style>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <form method="POST" action="{{ route('foo.store') }}">
                    @csrf
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Add a new Grade
                            </p>
                        </header>

                        <div class="card-content">
                            <div class="content">
                                <div class="field">
                                    <label class="label">Name <span class="required" data-tooltip="This field is required">*</span>

                                    </label>
                                    <div class="control">
                                        <textarea name="name" class="input @error('name') is-danger @enderror" type="text" rows="1" placeholder="Your name..."></textarea>
                                    </div>
                                    @error('name')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label">Grade <span class="required" data-tooltip="This field is required">*</span>

                                    </label>
                                    <div class="control">
                                        <textarea name="grade" class="textarea @error('grade') is-danger @enderror" type="number" rows="1" placeholder="A positive number..."></textarea>
                                    </div>
                                    @error('grade')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label">Passed <span class="required" data-tooltip="This field is required">*</span>

                                    </label>
                                    <div class="control">
                                        <textarea name="passed" class="textarea @error('passed') is-danger @enderror" rows="1" placeholder="1 = true, 0 = false..."></textarea>
                                    </div>
                                    @error('passed')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="field is-grouped">
                                {{-- Here are the form buttons: save, reset and cancel --}}
                                <div class="control">
                                    <button type="submit" class="button is-primary">Save</button>
                                </div>
                                <div class="control">
                                    <button type="reset" class="button is-warning">Reset</button>
                                </div>
                                <div class="control">
                                    <a type="button" href="/posts" class="button is-light">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




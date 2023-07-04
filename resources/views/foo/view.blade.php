<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
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
                                    <label class="label">Name</label>
                                    <div class="control">
                                            <textarea
                                                name="name"
                                                class="input @error('name') is-danger @enderror"
                                                type="text"
                                                rows="1"
                                                placeholder="Name of the foo..."></textarea>
                                    </div>
                                    @error('name')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label">Grade</label>
                                    <div class="control">
                                            <textarea
                                                name="thud"
                                                class="textarea @error('thud') is-danger @enderror"
                                                type="number"
                                                rows="1"
                                                placeholder="A positive number..."></textarea>
                                    </div>
                                    @error('thud')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label">Passed</label>
                                    <div class="control">
                                            <textarea
                                                name="wombat"
                                                class="textarea @error('wombat') is-danger @enderror"
                                                rows="1"
                                                placeholder="1 = true, 0 = false..."></textarea>
                                    </div>
                                    @error('wombat')
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

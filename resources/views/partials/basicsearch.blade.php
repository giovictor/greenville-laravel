<div class="basicsearch">
    <h3>Greenville College Library</h3>
    <h4>Search for library's materials and collections</h4>
    <form action={{route('borrowerBookSearch')}} id="basicsearchform">
        <div class="form-group">
            <input id="basicsearchbox" type="text" name="q" class="form-control" size="50">
        </div>
        <div class="form-group">
            Limit to: <select name="type" class="searchtype form-control">
                <option value="booktitle">Title</option>
                <option value="author">Author</option>
                <option value="publisher">Publisher</option>
                <option value="publishingyear">Year</option>
            </select>
        </div>
        <button type="submit" id="button" class="btn btn-success btn-sm">Search</button>
    </form>
</div>

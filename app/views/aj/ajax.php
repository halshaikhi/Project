<form role="form" class="form-horizontal" method="post" name="ccrForm">

                <div class="form-group">

                    <label for="select" class="col-lg-2 control-label">Province</label>

                    <div class="col-lg-2">

                        <select class="form-control" id="province" name="province" onchange="fetch_city(this.value);">

<option>Select Province</option>

<option value="Ontario">Ontario</option>

<option value="NS">Nova Scotia</option>

<option value="Alberta">Alberta</option>                        

</select>

                    </div>

                </div>

                <div class="form-group">

                    <label for="city" class="col-lg-2 control-label">Select City</label>

                    <div class="col-lg-2">

                        <select class="form-control" id="city" name="city">

                            <option>Select City</option>

                        </select>

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-lg-10 col-lg-offset-2">

                        <p class="pull-right" id="count_message"></p>

                        <button type="submit" class="btn btn-default" value="submit">Submit</button>

                    </div>

                </div>

            </form>


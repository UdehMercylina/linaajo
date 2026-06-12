<!-- Description -->
<div class="modal fade" id="description">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name">Payment Info</span></b></h4>
            </div>
            <div class="modal-body">
                <h4 id="mode"></h4>
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Status -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Request Status</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="request_edit.php">
                <input type="hidden" class="reqid" name="id">
                <div class="form-group">
                    <label for="type" class="col-sm-1 control-label">Status</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="edit_status" name="status" required>
                      <option value="">- Select -</option>
                      <option value="pending">- Pend -</option>
                      <option value="approved">- Approve -</option>
                      <option value="cancelled">- Deny -</option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update Status</button>
              </form>
            </div>
        </div>
    </div>
</div>     
 <div class="row ml-2 mr-2">
  <span class="text-primary font-weight-bold" style="font-size:36px;">ระบบรายงานการใช้รถยนต์</span>
 </div>
 <div class="row ml-2 mr-2" id="data_area">
  <!-- <div class="col-lg-3">
    <div class="card mt-2">
      <div class="card-body">
        <h5 class="card-title"> สถานะงาน C1 (กำลังก่อสร้าง)</h5>
        <div class="float-right text-success font-weight-bold">
          <h5 class="card-title"><i class="fas fa-folder-open"></i> 25 งาน</h5>
          <h5 class="card-title"><i class="far fa-money-bill-alt"></i>  1.48 ล้านบาท</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card mt-2">
      <div class="card-body">
        <h5 class="card-title"> สถานะงาน C1 (กำลังก่อสร้าง)</h5>
        <div class="float-right text-success font-weight-bold">
        <h5 class="card-title"><i class="fas fa-folder-open"></i> 25 งาน</h5>
        <h5 class="card-title"><i class="far fa-money-bill-alt"></i>  1.48 ล้านบาท</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card mt-2">
      <div class="card-body">
        <h5 class="card-title"> สถานะงาน C1 (กำลังก่อสร้าง)</h5>
        <div class="float-right text-success font-weight-bold">
        <h5 class="card-title"><i class="fas fa-folder-open"></i> 25 งาน</h5>
        <h5 class="card-title"><i class="far fa-money-bill-alt"></i>  1.48 ล้านบาท</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card mt-2">
      <div class="card-body">
        <h5 class="card-title"> สถานะงาน C1 (กำลังก่อสร้าง)</h5>
        <div class="float-right text-success font-weight-bold">
        <h5 class="card-title"><i class="fas fa-folder-open"></i> 25 งาน</h5>
        <h5 class="card-title"><i class="far fa-money-bill-alt"></i>  1.48 ล้านบาท</h5>
        </div>
      </div>
    </div>
  </div> -->
</div>
<div class="row mt-3 ml-2 mr-2">
  <div class="col-lg-12">
    <div class="card shadow">
      <div class="card-body">
          <table 
            id="tbl_data"
            data-toggle="table" 
            data-pagination="true"
            data-pagination-v-align="both"
            data-fixed-columns="true"
            data-sticky-header="true"
            data-search="true"
            data-page-list="[5, 10, 20, 100, ALL]"
            data-url="./api/datatable/job_api.php?peacode="
            data-page-size="5">
            <thead>
              <tr>
              <th data-field="wbs" data-sortable="true" data-formatter="job_detail">#</th> 
              <th data-field="wbs" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> WBS</th>
              <th data-field="description" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-info"></i> คำอธิบาย</th>
              <th data-field="user_status" data-sortable="true" data-formatter="text_user_sts"><i class="fas fa-user"></i> สถานะผู้ใช้</th>
              <th data-field="postg_date" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-calendar-day"></i> วันที่เบิกของครั้งแรก</th>
              <th data-field="day_now" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-sort-numeric-down"></i> จำนวนวัน</th>
              <!-- <th data-field="analy_date" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-sort-numeric-down"></i> วันที่วิเคราะห์</th> -->
              <th data-field="percent" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-percent"></i></i> ค่าแรง</th>
              <th data-field="per" data-sortable="true" data-formatter="textpercentFormatter"><i class="far fa-money-bill-alt"></i> ค่าใช้จ่ายหน้างาน(%)</th>
              <th data-field="act" data-sortable="true" data-formatter="textnumberFormatter"><i class="far fa-money-bill-alt"></i> ค่าพัสดุ+ค่าใช้จ่ายหน้างาน</th>
              <th data-field="ba" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-sort-numeric-down"></i> รหัสการไฟฟ้า</th>
              <th data-field="office_name" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-house-damage"></i> หน่วยงาน</th>
              <th data-field="network" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-sort-numeric-down"></i> โครงข่าย</th>
              <th data-field="tech_name" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas fa-user"></i> ผู้ควบคุมงาน</th>
              <th data-field="tech_id" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> รหัสพนักงาน</th>
              <!--  -->
              <!-- <th data-field="p_mat" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ประมาณการค่าพัสดุ</th>
              <th data-field="p_mat_in" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ประมาณการค่าพัสดุเข้างาน</th>
              <th data-field="p_labor" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ประมาณการค่าแรง</th>
              <th data-field="p_control" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ประมาณการค่าควบคุมงาน</th>
              <th data-field="p_tran" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ประมาณการค่าขนส่ง</th>
              <th data-field="p_general" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ประมาณการค่าเบ็ดเตล็ด</th>
              <th data-field="p_operate" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ประมาณการค่าดำเนินการ</th>
              <th data-field="p_tc" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าแผน Time Confirm</th>
              <th data-field="act_mat" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าพัสดุเบิกจริง</th>
              <th data-field="act_mat_in" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าพัสดุเข้างานเบิกจริง</th>
              <th data-field="act_labor" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าแรงเบิกจริง</th>
              <th data-field="act_control" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าควบคุมงานเบิกจริง</th>
              <th data-field="act_tran" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าขนส่งเบิกจริง</th>
              <th data-field="act_general" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าเบ็ดเตล็ดเบิกจริง</th>
              <th data-field="act_operate" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> ค่าดำเนินงานเบิกจริง</th>
              <th data-field="ac_tc" data-sortable="true" data-formatter="textCenterFormatter"><i class="fas  fa-sort-numeric-down"></i> บันทึก Time Confirm</th> -->
              <!--  -->
              
              </tr>
            </thead>
          </table>
      </div> 
      <div class="card-footer">
        <div class="float-left">
              <button class="btn btn-sm btn-outline-primary" href="#" title="Like" data-toggle="modal"  data-target="#column_modal">
              <i class="fa fa-check-square"></i>
                คอลัมน์
              </button>
        </div>
        <div class="float-right">
              <a class="btn btn-sm btn-outline-primary" href="spreadsheet.php?office=" id="exp_btn">
                <i class="fas fa-file-excel" aria-hidden="true"></i>
                Export
              </a>
        </div>
      </div>  
    </div>
<!-- modal เลือกคอลัมน์ -->
    <div class='modal fade' tabindex='-1' role='dialog' id='column_modal'>
      <div class='modal-dialog modal-lg' role='document' >
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title font-weight-bold' id="head_modal">เลือกกการแสดงคอลัมน์ <span id="pea_no"></span></h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>
          <div class='modal-body'>
            <div class="row text-success font-weight-bold">
              <div class="col-lg-4">
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="wbs" value="wbs" onclick="col(this.value)" checked/>&nbsp;WBS</label> 
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="description" value="description" onclick="col(this.value)" checked/>&nbsp;คำอธิบาย</label> 
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="user_status" value="user_status" onclick="col(this.value)" checked/>&nbsp;สถานะผู้ใช้</label> 
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="postg_date" value="postg_date" onclick="col(this.value)" checked/>&nbsp;วันที่เบิกของครั้งแรก</label> 
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="day_now" value="day_now" onclick="col(this.value)" checked/>&nbsp;จำนวนวัน</label>
              </div>
              <div class="col-lg-4">
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="percent" value="percent" onclick="col(this.value)" checked/>&nbsp;ค่าแรง(%)</label>
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="per" value="per" onclick="col(this.value)" checked/>&nbsp;ค่าใช้จ่ายหน้างาน(%)</label> 
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="act" value="act" onclick="col(this.value)" checked/>&nbsp;ค่าใช้จ่ายจริง</label>
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="ba" value="ba" onclick="col(this.value)"/>&nbsp;รหัสการไฟฟ้า</label>
                 
              </div>
              <div class="col-lg-4">
              <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="office_name" value="office_name" onclick="col(this.value)"/>&nbsp;หน่วยงาน</label>
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="tech_name" value="tech_name" onclick="col(this.value)" />&nbsp;ชื่อ-สกุล</label>
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="tech_id" value="tech_id" onclick="col(this.value)" />&nbsp;รหัสพนักงาน</label>
                <label class="dropdown-item text-success font-weight-bold" ><input type="checkbox" id="network" value="network" onclick="col(this.value)" />&nbsp;เลขที่โครงข่าย</label> 
                 
              </div>      
            </div> 
          </div>                  
        </div>
      </div>
    </div>
<!--modal งาน -->
    <div class='modal fade' tabindex='-1' role='dialog' id='job_detail'>
      <div class='modal-dialog modal-lg' role='document' >
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title font-weight-bold' id="head_modal">รายละเอียดงาน <span id="wbs_no"></span><span id="office"></span></h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>
          <div class='modal-body'>
            <div class="row">
              <div class="col-lg-6">
                <span class="font-weight-bold" >คำอธิบายงาน :</span>
                <span class="font-weight-bold text-success" id="des"></span>
              </div>
              <div class="col-lg-6">
                <span class="font-weight-bold">สถานะผู้ใช้ :</span>
                <span class="font-weight-bold text-success" id="user"></span>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-lg-6">
                <span class="font-weight-bold">วันที่เบิกของครั้งแรก :</span>
                <span class="font-weight-bold text-success" id="f_date"></span>
              </div>
              <div class="col-lg-6">
                <span class="font-weight-bold">จำนวนวัน :</span>
                <span class="font-weight-bold text-success" id="num_day"></span>
              </div>
              <!-- <div class="col-lg-6">
                <p class="font-weight-bold">วันที่วิเคราะห์ :</p>
                <p class="font-weight-bold text-success" id="analy_d"></p>
              </div> -->
            </div>
            <div class="row mt-6">
              <div class="col-lg-6">
                <span class="font-weight-bold">ค่าแรง(%) :</span>
                <span class="font-weight-bold text-success" id="labor"></span>
              </div>
              <div class="col-lg-6">
                <span class="font-weight-bold">ค่าใช้จ่ายหน้างาน(%) :</span>
                <span class="font-weight-bold text-success" id="per_f"></span>
              </div>
              <!-- <div class="col-lg-6">
                <span class="font-weight-bold">ค่าพัสดุ+ค่าใช้จ่ายหน้างาน :</span>
                <span class="font-weight-bold text-success" id="act_value"></span>
              </div> -->
            </div>
            <div class="row mt-2">
              <div class="col-lg-12">
                <span class="font-weight-bold">การเบิกจ่าย :</span>
                <table class="table table-bordered table-sm">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>ค่าพัสดุ</th>
                      <th>ค่าพัสดุเข้างาน</th>
                      <th>ค่าแรง</th>
                      <th>ค่าควบคุมงาน</th>
                      <th>ค่าขนส่ง</th>
                      <th>ค่าเบ็ตเตล็ด</th>
                      <th>ค่าดำเนินการ</th>
                      <th>Time Confirm</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>แผน</td>
                      <td id="p_mat"></td>
                      <td id="p_mat_in"></td>
                      <td id="p_labor"></td>
                      <td id="p_con"></td>
                      <td id="p_tran"></td>
                      <td id="p_general"></td>
                      <td id="p_operate"></td>
                      <td id="p_tc"></td>
                      
                    </tr>
                    <tr>
                      <td>จริง</td>
                      <td id="act_mat"></td>
                      <td id="act_mat_in"></td>
                      <td id="act_labor"></td>
                      <td id="act_con"></td>
                      <td id="act_tran"></td>
                      <td id="act_general"></td>
                      <td id="act_operate"></td>
                      <td id="act_tc"></td>
                    </tr>
                    <tr>
                        <td colspan="7"><span class="float-right font-weight-bold">ค่าใช้จ่ายหน้างาน(ค่าแรง+ค่าควบคุมงาน+ค่าขนส่ง+ค่าเบ็ดเตล็ด)</span></td>
                        <td colspan="2"><span id="expen" class="font-weight-bold"></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-lg-6">
                <span class="font-weight-bold">ผู้ควบคุมงาน :</span>
                <span class="font-weight-bold text-success" id="tech_n"></span>
              </div>
              <div class="col-lg-6">
                <span class="font-weight-bold">รหัสพนักงาน :</span>
                <span class="font-weight-bold text-success" id="tech_i"></span>
              </div>
              
            </div>
            <div class="row mt-2">
              <div class="col-lg-6">
                <span class="font-weight-bold">สังกัด :</span>
                <span class="font-weight-bold text-success" id="head_of"></span>
              </div>
              <div class="col-lg-6">
                <span class="font-weight-bold">เกษียณอายุ :</span>
                <span class="font-weight-bold text-success" id="retired_date"></span>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-lg-12">
                <p class="font-weight-bold">ข้อความ :</p>
              </div>
            </div>
            <div class="row msg" id="row_msg">
              <div class="col-lg-12" id="msg_area">
                <!-- <div class="card shadow mt-1">
                  <div class="card-body">
                    <span class="font-weight-bold"><i class="fas fa-user"></i> นายนัทธพงศ์ เจริญกิจพิเชียร</span>
                    <span class="text-success"><i class="fas fa-clock" aria-hidden="true"></i> 25-08-2562 11:30</span>
                    <br>
                    <span class="text-info"><i class="fas fa-comment-dots"></i> กำลังดำเนินการ</span>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="row mt-2">
              <div class="input-group ml-1 mr-1">
                <input type="text" class="form-control" placeholder="ข้อความ" id="text_msg" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text btn btn-primary" id="basic-addon2"><span class="text-white" onclick="insert_msg()"><i class="fas fa-paper-plane"></i></span></span>
                </div>
              </div>
            </div>             
            </div> 
          </div>               
        </div>
      </div>
    </div>
  </div>
</div>

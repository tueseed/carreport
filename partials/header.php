<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>โปรแกรมบันทึกการใช้งานรถยนต์ กฟภ.</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/theme_1545570683953.css">
    <link href="https://fonts.googleapis.com/css?family=Sarabun|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-table-sticky-header.css">
    <link rel="stylesheet" href="./assets/css/effect.css">
    <link rel="stylesheet" href="./assets/css/sidemenu.css">
    
    <style>
      * {
        font-family: 'Sarabun', 'Roboto', sans-serif;
      }
    </style>
  </head>

  <body>
    <header class="pb-3">
      <!-- Image and text -->
      <nav class="shadow-sm navbar navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand font-weight-bold" href="?action=rg1">
            <img src="./assets/images/pea-logo.png" width="100" class="d-inline-block align-top" alt="">
            โปรแกรมบันทึกการใช้งานรถยนต์ กฟภ. <span id="head_peaname"></span>
          </a>
          <!-- <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
              <span class="header text-dark font-weight-bold text-center" id="user_logged">
                ยังไม่ได้เข้าสู่ระบบ
                <img src="http://dynamicwork.net/wp/wp-content/uploads/2014/01/logo-PEA.png" width="75" height="50">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right justify-content-center">
                <div class="dropdown-item">
                  <span id = "office_1"></span>
                </div>
                <div class="dropdown-item">
                  <span id = "position"></span>
                </div>
                <div class="dropdown-item">
                  <span id = "DepartmentFullName"></span>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?action=add_importer" id="admin_menu1">
                  <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                  เพิ่มผู้นำเข้าข้อมูล
                </a>
                <a class="dropdown-item" href="?action=upload" id="admin_menu">
                  <i class="fas fa-upload fa-sm fa-fw mr-2 text-gray-400"></i>
                  นำเข้าข้อมูล
                </a>
                <a class="dropdown-item" href="#" onclick="des_session()">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  ออกจากระบบ
                </a>
            </div> -->
          </div>
        </div>
      </nav>
    </header>
    <main class="mb-3" id="main">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-sm-2 col-md-4 col-lg-2">
            <a href="index.php" class="nav-link"><h5 class="header text-secondary font-weight-bold text-left">เมนูหลัก</h5></a>
            <div class="nav flex-column nav-pills rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link <?=$rg=='1'?'active':'' ?>" href="?action=rg1&rg=1">
                <i class="fa fa-clipboard" aria-hidden="true"></i>  
                สายงานการไฟฟ้าภาค 1
              </a>
              <a class="nav-link <?=$rg=='2'?'active':'' ?>" href="?action=rg1&rg=2">
              <i class="fa fa-clipboard"></i>  
              สายงานการไฟฟ้าภาค 2
              </a>
              <a class="nav-link <?=$rg=='3'?'active':'' ?>" href="?action=rg1&rg=3">
                <i class="fa fa-clipboard" aria-hidden="true"></i>
                สายงานการไฟฟ้าภาค 3
              </a>
              <a class="nav-link <?=$rg=='4'?'active':'' ?>" href="?action=rg1&rg=4">
                <i class="fa fa-clipboard" aria-hidden="true"></i>
                สายงานการไฟฟ้าภาค 4
              </a>
            </div>
          </div> -->
          
          <div class="col-sm-10 col-md-10 col-lg-12">
          
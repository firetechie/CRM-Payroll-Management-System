<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li class="header">REPORTS</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="header">MANAGE</li>
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php"><i class="fa fa-user-circle-o"></i> Employee List</a></li>
            <li><a href="overtime.php"><i class="fa fa-times-circle-o"></i> Overtime</a></li>
            <li><a href="cashadvance.php"><i class="fa fa-money"></i> Cash Advance</a></li>
            <li><a href="schedule.php"><i class="fa fa-window-close-o"></i> Schedules</a></li>
          </ul>
        </li>
        <li><a href="deduction.php"><i class="fa fa-file-text"></i> <span>Deductions</span> </a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i><span>Positions</span> </a></li>

        <li class="header">Printables</li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Salary</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Schedules</span></a></li>

        <li class="header">Calender</li>
        <li><a href="calender.php"><i class="fa fa-calendar-check-o"></i> <span>Calender</span></a></li>

        <br>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Sign out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
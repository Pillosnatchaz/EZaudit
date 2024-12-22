<?php 
    session_start();

    if (!isset($_SESSION['userid'])) {

        header("Location: auditorLogin.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - EZaudit</title>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">
        <link rel='icon' href="../Images/EZaudit-logo-only.png">
        <style><?php include '../dashboard-style.css'; ?></style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                        <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php">EZaudit Dashboard</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../backend/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></i></div>
                                Homepage
                            </a>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Questionare Form</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-plus"></i></div>
                                Create New
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Construction Form EZ-C01</a>
                                    <a class="nav-link" href="#">Information Security Form ISO 27001</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Past Audit
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Construction Form EZ-C01
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php 
                            echo $_SESSION['username'];
                        ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Audit Questionare</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-solid fa-file"></i>
                                Construction Form EZ-C01
                            </div>
                            <div class="row">
                                <form method="POST" id="form-audit-questionare1" enctype="multipart/form-data">
                                    <div class="card-contact">
                                        <h3>
                                        Section 1 - General Information
                                        </h3>
                                        <div class="mb-3">
                                            <label for="input-title" class="form-label">Audit Title</label>
                                            <input type="text" class="form-control" id="input-auTitle" name="auTitle" aria-describedby="aaaHelp" pattern=".{3,}" title="Please enter at least 3 characters" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input-department" class="form-label">Location</label>
                                            <input type="text" class="form-control" id="input-auLocation" name="auLocation" aria-describedby="departmentHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input-violation" class="form-label">Date of Audit</label>
                                            <input type="date" class="form-control" id="input-auDOA" name="auDOA" aria-describedby="violationHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input-description" class="form-label">Prepared By</label>
                                            <input type="text" class="form-control" id="input-auAU" name="auAU" aria-describedby="emailHelp" required>
                                        </div>
                                        <br>
                                        <h2>Section 2 - Documentation</h2>     
                                        <div class="checklist-item">
                                            <label for="item2.1"><span class="span-item">2.1</span> Are Permit to work system in place and used?</label>
                                            <input type="checkbox" id="doc_permit_system" name="doc_permit_system" value="permit to work exist" >
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item2.2"><span class="span-item">2.2</span> Are the worker aware of the emergency procedures?</label>
                                            <input type="checkbox" id="doc_worker_SOSprocedure" name="doc_worker_SOSprocedure" value="Proper scaffolding in place">
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item2.3"><span class="span-item">2.3</span> Is employers liability insurance displayed?</label>
                                            <input type="checkbox" id="doc_worker_insurance" name="doc_worker_insurance" value="Employers liability insurance is displayed">
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item2.4"><span class="span-item">2.4</span> Are all visitors / workers to site inducted?</label>
                                            <input type="checkbox" id="doc_visitor_inducted" name="doc_visitor_inducted" value="All visitors or workers to site is inducted">
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item2.5"><span class="span-item">2.5</span> Is a first aid poster displayed?</label>
                                            <input type="checkbox" id="doc_firstaid_poster" name="doc_firstaid_poster" value="First aid poster is displayed">
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item2.6"><span class="span-item">2.6</span> Is a location map to local hospital available?</label>
                                            <input type="checkbox" id="doc_local_hospital_map" name="doc_local_hospital_map" value="Location map to a local hospital is available">
                                        </div>
                                        <br>
                                        <h2>
                                            Section 3 - Safe Places of Work
                                        </h2>
                                        <div class="checklist-item">
                                            <label for="item-radio"><span class="span-item">3.1</span> Are the working structure stable, adequately braced and not overloaded?</label>
                                            <input type="checkbox" id="safeplace_stable_structure" name="safeplace_stable_structure" value="working structure is stable">
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item3.2"><span class="span-item">3.2</span> Is the work area and interior adequately lit?</label>
                                            <input type="checkbox" id="safeplace_workarea_lit" name="safeplace_workarea_lit" value="working area and interior is lit properly">
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item3.3"><span class="span-item">3.3</span> Is the material stored safely?</label>
                                            <input type="checkbox" id="safeplace_material_safestored" name="safeplace_material_safestored" value="Material is safely stored">
                                        </div>
                                        <div class="checklist-item">
                                            <label for="item3.4"><span class="span-item">3.4</span> Are there any spillage or trip hazard around the construction site?</label>
                                            <input type="checkbox" id="safeplace_hazard_spillage" name="safeplace_hazard_spillage" value="There is no trip hazard or spillage">
                                        </div> 
                                        <br>
                                        <h2>
                                            Section 4 - Worker Compliance
                                        </h2>
                                        <div class="radio-item">
                                            <label for="item4"><span class="span-item">4.1</span> Condition of equipment</label>
                                            <div class="radio-options">
                                                <label>
                                                    <input type="radio" id="equipment_condition" name="equipment_condition" value="Inadequate" required> Inadequate
                                                </label>
                                                <label>
                                                    <input type="radio" id="equipment_condition" name="equipment_condition" value="Can be improved" required> Can be Improved
                                                </label>
                                                <label>
                                                    <input type="radio" id="equipment_condition" name="equipment_condition" value="Good" required> Good
                                                </label>
                                                <label>
                                                    <input type="radio" id="equipment_condition" name="equipment_condition" value="Excellent" required> Excellent
                                                </label>
                                            </div>
                                        </div>
                                        <div class="radio-item">
                                            <label for="item4"><span class="span-item">4.2</span> Chemicals storing</label>
                                            <div class="radio-options">
                                                <label>
                                                    <input type="radio" id="Chemicals_storing" name="Chemicals_storing" value="Inadequate" required> Inadequate
                                                </label>
                                                <label>
                                                    <input type="radio" id="Chemicals_storing"name="Chemicals_storing" value="Can be improved" required> Can be Improved
                                                </label>
                                                <label>
                                                    <input type="radio" id="Chemicals_storing" name="Chemicals_storing" value="Good" required> Good
                                                </label>
                                                <label>
                                                    <input type="radio" id="Chemicals_storing" name="Chemicals_storing" value="Excellent" required> Excellent
                                                </label>
                                            </div>
                                        </div>
                                        <div class="radio-item">
                                            <label for="item4"><span class="span-item">4.3</span> Evacuation / Emergency route</label>
                                            <div class="radio-options">
                                                <label>
                                                    <input type="radio" id="evacuation_route" name="evacuation_route" value="Inadequate" required> Inadequate
                                                </label>
                                                <label>
                                                    <input type="radio" id="evacuation_route" name="evacuation_route" value="Can be improved" required> Can be Improved
                                                </label>
                                                <label>
                                                    <input type="radio" id="evacuation_route" name="evacuation_route" value="Good" required> Good
                                                </label>
                                                <label>
                                                    <input type="radio" id="evacuation_route" name="evacuation_route" value="Excellent" required> Excellent
                                                </label>
                                            </div>
                                        </div>
                                        <h2>Section 5: Auditor Sign</h2>
                                            <div class="mb-3">
                                                <label for="input-description" class="form-label">General Comments</label>
                                                <textarea type="text" class="form-control" id="input-general-comments" name="general_comments" rows="3" style="height: 200px;" required></textarea>
                                            </div>
                                            <label for="signature">Upload Signature (<b>Required</b>):</label><br>
                                            <input type="file" id="signature" name="signature" accept="image/*" required><br><br>
                                        <button type="submit" id="submit" name="submit" class="btn btn-submit">Submit</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; EZaudit 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../scripts/questionare.js"></script>
        <script src="../scripts/dashboard-script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script>
        document.addEventListener('DOMContentLoaded', event => {
            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
        </script>
    </body>
    
</html>

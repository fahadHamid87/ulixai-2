<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$pageTitles = [
    "archivejobs.php" => "Archived Jobs",
    "cancelmsg.php" => "Cancel Message",
    "canclemsg.php" => "Cancel Message",
    "canclequest.php" => "Cancel Request",
    "cancelservice.php" => "Cancel Service",
    "dashboardindex.php" => "Dashboard",
    "dashboardheader.php" => "Dashboard Header",
    "dispute1.php" => "Dispute",
    "disputenew.php" => "New Dispute",
    "documentcategory.php" => "Document Categories",
    "editecomplete.php" => "Edit Complete",
    "jobdetail.php" => "Job Detail",
    "jobpage.php" => "Job Page",
    "jobslist.php" => "Jobs List",
    "modifyrequest.php" => "Modify Request",
    "myaccount.php" => "My Account",
    "mydocuments.php" => "My Documents",
    "myearnings.php" => "My Earnings",
    "mypersonalinfo.php" => "My Personal Info",
    "myservicerequest.php" => "Service Requests",
    "ongoingservices.php" => "Ongoing Services",
    "orderconfirm.php" => "Order Confirmation",
    "payments.php" => "Payments",
    "paymentsvalidate.php" => "Validate Payments",
    "pointscalculation.php" => "Points Calculation",
    "privatemsg.php" => "Private Messages",
    "providerdetails.php" => "Provider Details",
    "reviewconfirm.php" => "Review Confirmation",
    "reviewend.php" => "Review End",
    "reviewoptions.php" => "Review Options",
    "reviews.php" => "Reviews",
    "reviewreply.php" => "Review Reply",
    "seemyadd.php" => "My Ads",
    "service-announcement.php" => "Service Announcements",
    "serviceprovider.php" => "Service Providers",
    "sidebardash.php" => "Sidebar",
    "uploaddocuments.php" => "Upload Documents",
    "uploadpicture.php" => "Upload Picture",
    "userprofile.php" => "User Profile",
    "walletmoney.php" => "Wallet & Money",
];

// Fallback formatting
function formatPageTitle($filename) {
    $name = str_replace(".php", "", $filename);
    $name = preg_replace('/(?<!\ )[A-Z]/', ' $0', $name); // Add space before capital letters
    return ucwords(str_replace(["-", "_"], " ", $name));
}

$pageTitle = $pageTitles[$currentPage] ?? formatPageTitle($currentPage);
?>

<!-- Tailwind-Styled Breadcrumb -->
<nav class="text-sm text-gray-600 my-4 px-4" aria-label="Breadcrumb">
  <ol class="list-reset flex items-center space-x-2">
    <li><a href="dashboardindex.php" class="text-blue-600 hover:underline font-medium">Home</a></li>
    <li>/</li>
    <li class="text-gray-500"><?= htmlspecialchars($pageTitle) ?></li>
  </ol>
</nav>
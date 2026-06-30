php aritsan serve 
php migrate 

http://localhost/phpmyadmin

http://127.0.0.1:8000"# job-portal-website" 





1. Save Job
2. Show All Jobs
3. Job Detail Page
4. My Jobs (user ki apni jobs)
5. Edit Job
6. Delete Job
7. Profile Update
8. Change Password



Frontend
│
├── Home
├── Find Jobs
└── Job Detail

User Dashboard
│
├── Post Job
├── My Jobs
├── Edit Job
├── Profile
└── Change Password

Admin Dashboard
│
├── Manage Users
├── Manage Jobs
└── Site Control







6. Roles (Admin/Employer/Job Seeker)


7. Admin Dashboard




                       <button type="button" class="btn btn-primary">
    Save Job
</button>



<form action="{{ route('job.save') }}" method="POST">
    @csrf





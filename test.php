st@A507PC5 MINGW64 ~
$ spwd
bash: spwd: command not found

st@A507PC5 MINGW64 ~
$ swp
bash: swp: command not found

st@A507PC5 MINGW64 ~
$ /d
bash: /d: Is a directory

st@A507PC5 MINGW64 ~
$ cd /d

st@A507PC5 MINGW64 /d
$ cd OSPanel/

st@A507PC5 MINGW64 /d/OSPanel
$ domains/
bash: domains/: Is a directory

st@A507PC5 MINGW64 /d/OSPanel
$ local
local         locale.exe    localsec.dll  localspl.dll  localui.dll

st@A507PC5 MINGW64 /d/OSPanel
$ localhost
bash: localhost: command not found

st@A507PC5 MINGW64 /d/OSPanel
$ domain
bash: domain: command not found

st@A507PC5 MINGW64 /d/OSPanel
$ domains
bash: domains: command not found

st@A507PC5 MINGW64 /d/OSPanel
$ domains/
bash: domains/: Is a directory

st@A507PC5 MINGW64 /d/OSPanel
$ cd domains

st@A507PC5 MINGW64 /d/OSPanel/domains
$ cd localhost/

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git init
Reinitialized existing Git repository in D:/OSPanel/domains/localhost/.git/

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git status
On branch master
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git status
On branch master
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git init
Reinitialized existing Git repository in D:/OSPanel/domains/localhost/.git/

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git staus
git: 'staus' is not a git command. See 'git --help'.

The most similar command is
        status

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git status
On branch master
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git commit -am "First project"
On branch master
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git branch TEST-123

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git status
On branch master
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (master)
$ git checkout TEST-123
Switched to branch 'TEST-123'

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ git status
On branch TEST-123
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ git status
On branch TEST-123
Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        deleted:    test1.php

no changes added to commit (use "git add" and/or "git commit -a")

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ git commit -am "delete file"
[TEST-123 d114ea1] delete file
 1 file changed, 0 insertions(+), 0 deletions(-)
 delete mode 100644 test1.php

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ git status
On branch TEST-123
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ git checkout Master
Switched to branch 'Master'

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (Master)
$ git status
On branch Master
nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (Master)
$ git checkout TEST-123
Switched to branch 'TEST-123'

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ cd \domains
bash: cd: domains: No such file or directory

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ cd /domains
bash: cd: /domains: No such file or directory

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ cd \domains
bash: cd: domains: No such file or directory

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ cd ..

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone https://github.com/Alex-Caepio/ITSTEP.git
Cloning into 'ITSTEP'...
remote: Enumerating objects: 4, done.
remote: Counting objects: 100% (4/4), done.
remote: Compressing objects: 100% (3/3), done.
remote: Total 4 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (4/4), done.

st@A507PC5 MINGW64 /d/OSPanel/domains
$ ssh-keygen-o
bash: ssh-keygen-o: command not found

st@A507PC5 MINGW64 /d/OSPanel/domains
$ ssh -keygen -o
Bad escape character 'ygen'.

st@A507PC5 MINGW64 /d/OSPanel/domains
$ ssh-keygen -o
Generating public/private rsa key pair.
Enter file in which to save the key (/c/Users/st/.ssh/id_rsa):
Created directory '/c/Users/st/.ssh'.
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /c/Users/st/.ssh/id_rsa.
Your public key has been saved in /c/Users/st/.ssh/id_rsa.pub.
The key fingerprint is:
SHA256:RNGYLU7xQtwkVnmN0paxR58xx6QPisCoLND4U2Y40wo st@A507PC5
The key's randomart image is:
+---[RSA 2048]----+
|       .B@oo.=.=o|
| o o   **o* *o.o*|
|E = = .o=..+. +..|
| + O . ..o . o o |
|  = o   S . .   .|
|   o             |
|                 |
|                 |
|                 |
+----[SHA256]-----+

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone
fatal: You must specify a repository to clone.

usage: git clone [<options>] [--] <repo> [<dir>]

    -v, --verbose         be more verbose
    -q, --quiet           be more quiet
    --progress            force progress reporting
    -n, --no-checkout     don't create a checkout
    --bare                create a bare repository
    --mirror              create a mirror repository (implies bare)
    -l, --local           to clone from a local repository
    --no-hardlinks        don't use local hardlinks, always copy
    -s, --shared          setup as shared repository
    --recurse-submodules[=<pathspec>]
                          initialize submodules in the clone
    -j, --jobs <n>        number of submodules cloned in parallel
    --template <template-directory>
                          directory from which templates will be used
    --reference <repo>    reference repository
    --reference-if-able <repo>
                          reference repository
    --dissociate          use --reference only while cloning
    -o, --origin <name>   use <name> instead of 'origin' to track upstream
    -b, --branch <branch>
                          checkout <branch> instead of the remote's HEAD
    -u, --upload-pack <path>
                          path to git-upload-pack on the remote
    --depth <depth>       create a shallow clone of that depth
    --shallow-since <time>
                          create a shallow clone since a specific time
    --shallow-exclude <revision>
                          deepen history of shallow clone, excluding rev
    --single-branch       clone only one branch, HEAD or --branch
    --no-tags             don't clone any tags, and make later fetches not to follow them
    --shallow-submodules  any cloned submodules will be shallow
    --separate-git-dir <gitdir>
                          separate git dir from working tree
    -c, --config <key=value>
                          set config inside the new repository
    -4, --ipv4            use IPv4 addresses only
    -6, --ipv6            use IPv6 addresses only
    --filter <args>       object filtering


st@A507PC5 MINGW64 /d/OSPanel/domains
$ $ git clone https://github.com/Alex-Caepio/ITSTEP.git
bash: $: command not found

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone https://github.com/Alex-Caepio/ITSTEP.git
fatal: destination path 'ITSTEP' already exists and is not an empty directory.

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone https://github.com/Alex-Caepio/ITSTEP1.git
Cloning into 'ITSTEP1'...
Logon failed, use ctrl+c to cancel basic credential prompt.
Username for 'https://github.com':
git clone https://github.com/Alex-Caepio/ITSTEP.giterror: unable to read askpass response from 'C:/Program Files/Git/mingw64/libexec/git-core/git-gui--askpass'
Password for 'https://github.com':
remote: Repository not found.
fatal: Authentication failed for 'https://github.com/Alex-Caepio/ITSTEP1.git/'

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone https://github.com/Alex-Caepio/ITSTEP1.git
Cloning into 'ITSTEP1'...
Logon failed, use ctrl+c to cancel basic credential prompt.
Username for 'https://github.com':
error: unable to read askpass response from 'C:/Program Files/Git/mingw64/libexec/git-core/git-gui--askpass'
Password for 'https://github.com':
remote: Repository not found.
fatal: Authentication failed for 'https://github.com/Alex-Caepio/ITSTEP1.git/'

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone https://github.com/Alex-Caepio/ITSTEP1.git
Cloning into 'ITSTEP1'...
Logon failed, use ctrl+c to cancel basic credential prompt.
Username for 'https://github.com':
error: unable to read askpass response from 'C:/Program Files/Git/mingw64/libexec/git-core/git-gui--askpass'
Password for 'https://github.com':
remote: Repository not found.
fatal: Authentication failed for 'https://github.com/Alex-Caepio/ITSTEP1.git/'

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone git@github.com:Alex-Caepio/ITSTEP.git
fatal: destination path 'ITSTEP' already exists and is not an empty directory.

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git clone git@github.com:Alex-Caepio/ITSTEP.git
Cloning into 'ITSTEP'...
The authenticity of host 'github.com (140.82.121.3)' can't be established.
RSA key fingerprint is SHA256:nThbg6kXUpJWGl7E1IGOCspRomTxdCARLviKw6E5SY8.
Are you sure you want to continue connecting (yes/no)? yes
Warning: Permanently added 'github.com,140.82.121.3' (RSA) to the list of known hosts.
remote: Enumerating objects: 7, done.
remote: Counting objects: 100% (7/7), done.
remote: Compressing objects: 100% (5/5), done.
remote: Total 7 (delta 0), reused 0 (delta 0), pack-reused 0
Receiving objects: 100% (7/7), done.

st@A507PC5 MINGW64 /d/OSPanel/domains
$ cd localhost/

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ giy checkout Master
bash: giy: command not found

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (TEST-123)
$ git checkout Master
Switched to branch 'Master'
M       index.php

st@A507PC5 MINGW64 /d/OSPanel/domains/localhost (Master)
$ cd ..

st@A507PC5 MINGW64 /d/OSPanel/domains
$ git status
fatal: not a git repository (or any of the parent directories): .git

st@A507PC5 MINGW64 /d/OSPanel/domains
$ cd ITSTEP/

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ ls -la
total 6
drwxr-xr-x 1 st 1049089 0 сен  7 21:23 ./
drwxr-xr-x 1 st 1049089 0 сен  7 21:23 ../
drwxr-xr-x 1 st 1049089 0 сен  7 21:30 .git/
-rw-r--r-- 1 st 1049089 2 сен  7 21:23 .gitignore
-rw-r--r-- 1 st 1049089 8 сен  7 21:23 README.md

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        test.php

nothing added to commit but untracked files present (use "git add" to track)

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git add .

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git add test.php

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        new file:   test.php


st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git commit -am "Init Commit"
[main f262852] Init Commit
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 test.php

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git status
On branch main
Your branch is ahead of 'origin/main' by 1 commit.
  (use "git push" to publish your local commits)

nothing to commit, working tree clean

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git push main
fatal: 'main' does not appear to be a git repository
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git push origin main
Warning: Permanently added the RSA host key for IP address '140.82.121.4' to the list of known hosts.
Counting objects: 3, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 307 bytes | 307.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0)
To github.com:Alex-Caepio/ITSTEP.git
   44ad0d5..f262852  main -> main

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)
$ git remote -v
origin  git@github.com:Alex-Caepio/ITSTEP.git (fetch)
origin  git@github.com:Alex-Caepio/ITSTEP.git (push)

st@A507PC5 MINGW64 /d/OSPanel/domains/ITSTEP (main)

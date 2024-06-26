/* Generated from 'runguard-config.h.in' on Thu May  9 08:26:59 UTC 2024. */

#ifndef _RUNGUARD_CONFIG_
#define _RUNGUARD_CONFIG_

/* Valid users to allow as unprivileged user that runguard drops to.
   The '*' globbing characters matches an arbitrary length string
   since we want to have a user for each judgedaemon when supporting
   multiple judgedaemons per host. Matching is only performed when the
   user is specified as a name, not UID, to runguard. */
#define VALID_USERS "domjudge-run,domjudge-run-*"

#define CHROOT_PREFIX "/opt/domjudge/judgehost/judgings"

#endif /* _RUNGUARD_CONFIG_ */

# Variables (mostly paths) set by configure.
# This file is globally included via Makefile.global.

# General package variables
PACKAGE = domjudge
VERSION = 8.2.3
DISTNAME = $(PACKAGE)-$(VERSION)

# The following line is automatically modified by snapshot/release
# scripts, do not change manually!
PUBLISHED = release

PACKAGE_NAME      = DOMjudge
PACKAGE_VERSION   = 8.2.3
PACKAGE_STRING    = DOMjudge 8.2.3
PACKAGE_TARNAME   = domjudge
PACKAGE_BUGREPORT = domjudge-devel@domjudge.org

# Compilers and FLAGS
CC  = gcc
CXX = g++
CPP = gcc -E

CFLAGS   = -g -O2 -Wall -fstack-protector -fPIE -D_FORTIFY_SOURCE=2
CXXFLAGS = -g -O2 -Wall -fstack-protector -fPIE -D_FORTIFY_SOURCE=2
CPPFLAGS = 
LDFLAGS  =  -fPIE -pie -Wl,-z,relro -Wl,-z,now 

EXEEXT = 
OBJEXT = .o

# Other programs
LN_S    = ln -s
MKDIR_P = /usr/bin/mkdir -p
INSTALL = /usr/bin/install -c


# Build documentation?
DOC_BUILD_ENABLED = yes

# libcgroup
LIBCGROUP = -lcgroup

# User:group file ownership of password files
DOMJUDGE_USER   = usuario
WEBSERVER_GROUP = www-data

# Base URL of the DOMjudge web interfaces
BASEURL         = https://example.com/domjudge/

# Autoconf prefixes and paths
FHS_ENABLED    = no

prefix         = /opt/domjudge
exec_prefix    = ${prefix}

bindir         = ${exec_prefix}/bin
sbindir        = ${exec_prefix}/sbin
libexecdir     = ${exec_prefix}/libexec
sysconfdir     = ${prefix}/etc
sharedstatedir = ${prefix}/com
localstatedir  = ${prefix}/var
libdir         = ${exec_prefix}/lib
includedir     = ${prefix}/include
oldincludedir  = /usr/include
datarootdir    = ${prefix}/share
datadir        = ${datarootdir}
infodir        = ${datarootdir}/info
localedir      = ${datarootdir}/locale
mandir         = ${datarootdir}/man
docdir         = ${datarootdir}/doc/${PACKAGE_TARNAME}
htmldir        = ${docdir}
dvidir         = ${docdir}
pdfdir         = ${docdir}
psdir          = ${docdir}

# Installation paths
domserver_bindir       = /opt/domjudge/domserver/bin
domserver_etcdir       = /opt/domjudge/domserver/etc
domserver_webappdir    = /opt/domjudge/domserver/webapp
domserver_sqldir       = /opt/domjudge/domserver/sql
domserver_libdir       = /opt/domjudge/domserver/lib
domserver_libvendordir = /opt/domjudge/domserver/lib/vendor
domserver_logdir       = /opt/domjudge/domserver/log
domserver_rundir       = /opt/domjudge/domserver/run
domserver_tmpdir       = /opt/domjudge/domserver/tmp
domserver_exampleprobdir = /opt/domjudge/domserver/example_problems
PHPVERSION             = 8.1

judgehost_bindir       = /opt/domjudge/judgehost/bin
judgehost_etcdir       = /opt/domjudge/judgehost/etc
judgehost_libdir       = /opt/domjudge/judgehost/lib
judgehost_libjudgedir  = /opt/domjudge/judgehost/lib/judge
judgehost_logdir       = /opt/domjudge/judgehost/log
judgehost_rundir       = /opt/domjudge/judgehost/run
judgehost_tmpdir       = /opt/domjudge/judgehost/tmp
judgehost_judgedir     = /opt/domjudge/judgehost/judgings
judgehost_chrootdir    = /chroot/domjudge
judgehost_cgroupdir    = /sys/fs/cgroup

domjudge_docdir        = /opt/domjudge/doc

systemd_unitdir        = /lib/systemd/system

# The tmpdir's are not in these lists, since they would otherwise get
# their permissions overwritten in FHS install mode.
domserver_dirs = $(domserver_bindir) $(domserver_etcdir) \
                 $(domserver_libdir) $(domserver_libvendordir) \
                 $(domserver_logdir) $(domserver_rundir) \
                 $(addprefix $(domserver_webappdir)/public/images/,affiliations countries teams) \
		 $(domserver_exampleprobdir)

judgehost_dirs = $(judgehost_bindir) $(judgehost_etcdir) $(judgehost_libdir) \
                 $(judgehost_libjudgedir) $(judgehost_logdir) \
                 $(judgehost_rundir) $(judgehost_judgedir)

docs_dirs      = $(addprefix $(domjudge_docdir)/,manual examples logos)

# Macro to substitute configure variables.
# Defined in makefile to allow for expansion of ${prefix} etc. during
# build and install, conforming to the GNU coding standards, see:
# http://www.gnu.org/software/hello/manual/autoconf/Installation-Directory-Variables.html
define substconfigvars
@[ -n "$(QUIET)" ] || echo "Substituting configure variables in '$@'."
@cat $< | sed \
	-e "s|@configure_input[@]|Generated from '$<' on `date`.|g" \
	-e 's,@PACKAGE_NAME[@],DOMjudge,g' \
	-e 's,@DOMJUDGE_VERSION[@],8.2.3,g' \
	-e 's,@domserver_bindir[@],/opt/domjudge/domserver/bin,g' \
	-e 's,@domserver_etcdir[@],/opt/domjudge/domserver/etc,g' \
	-e 's,@domserver_webappdir[@],/opt/domjudge/domserver/webapp,g' \
	-e 's,@domserver_sqldir[@],/opt/domjudge/domserver/sql,g' \
	-e 's,@domserver_libdir[@],/opt/domjudge/domserver/lib,g' \
	-e 's,@domserver_libvendordir[@],/opt/domjudge/domserver/lib/vendor,g' \
	-e 's,@domserver_logdir[@],/opt/domjudge/domserver/log,g' \
	-e 's,@domserver_rundir[@],/opt/domjudge/domserver/run,g' \
	-e 's,@domserver_tmpdir[@],/opt/domjudge/domserver/tmp,g' \
	-e 's,@domserver_exampleprobdir[@],/opt/domjudge/domserver/example_problems,g' \
	-e 's,@judgehost_bindir[@],/opt/domjudge/judgehost/bin,g' \
	-e 's,@judgehost_etcdir[@],/opt/domjudge/judgehost/etc,g' \
	-e 's,@judgehost_libdir[@],/opt/domjudge/judgehost/lib,g' \
	-e 's,@judgehost_libjudgedir[@],/opt/domjudge/judgehost/lib/judge,g' \
	-e 's,@judgehost_logdir[@],/opt/domjudge/judgehost/log,g' \
	-e 's,@judgehost_rundir[@],/opt/domjudge/judgehost/run,g' \
	-e 's,@judgehost_tmpdir[@],/opt/domjudge/judgehost/tmp,g' \
	-e 's,@judgehost_judgedir[@],/opt/domjudge/judgehost/judgings,g' \
	-e 's,@judgehost_chrootdir[@],/chroot/domjudge,g' \
	-e 's,@judgehost_cgroupdir[@],/sys/fs/cgroup,g' \
	-e 's,@domjudge_docdir[@],/opt/domjudge/doc,g' \
	-e 's,@systemd_unitdir[@],/lib/systemd/system,g' \
	-e 's,@DOMJUDGE_USER[@],usuario,g' \
	-e 's,@WEBSERVER_GROUP[@],www-data,g' \
	-e 's,@BEEP[@],@BEEP@,g' \
	-e 's,@RUNUSER[@],domjudge-run,g' \
	-e 's,@RUNGROUP[@],domjudge-run,g' \
	-e 's,@BASEURL[@],https://example.com/domjudge/,g' \
	-e 's,@PHPVERSION[@],8.1,g' \
	> $@
@chmod $(shell stat -c '%a' $<) $@
endef

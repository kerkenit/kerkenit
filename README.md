<p align="center">
    <img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&text=%E2%9A%B0%EF%B8%8F%20R.I.P.%20GitHub%20%E2%9A%B0%EF%B8%8F&height=120§ion=header&fontSize=52" width="100%" />
</p>

<p align="center">
    <i>A notice of trust lost. I have removed 99% of my source code from GitHub and will no longer use the platform for private projects.</i>
</p>

<p align="center">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" alt="Git" height="45" width="45" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg" alt="GitHub" height="45" width="45" />
  💀 &nbsp;<b>Migrating away from a compromised code host</b>&nbsp;💀
</p>

---

<h2> 🪦 &nbsp; Why I Lost Confidence in GitHub</h2>

<p align="left">
    I no longer consider GitHub a safe substrate for the code I care about. A
    cascade of supply-chain and credential-theft campaigns against GitHub Actions
    has eroded my trust in the platform's security guarantees. The incidents below
    substantiate that decision.
</p>

- 🔓 <b>GhostAction mass account hijack</b> — Attackers compromised roughly
  <b>1,900 GitHub accounts</b> and used the hijacked maintainer credentials to inject
  malicious GitHub Actions workflows into <b>more than 30,000 repositories</b>,
  attempting to exfiltrate <b>3,174 secrets</b>. The malicious jobs were disguised
  as legitimate jobs (e.g. `security-audit.yml`, `github_actions_security.yml`),
  harvesting CI/CD secrets, cloud access keys, and AI provider API keys.
  <br>• <a href="https://thenewstack.io/hackers-hijacked-1900-github-accounts-then-they-went-after-30000-repos/">The New Stack — Hackers hijacked 1,900 GitHub accounts, then they went after 30,000 repos</a>
  <br>• <a href="https://thehackernews.com/2026/10/ghostaction-compromises-about-1900.html">The Hacker News — GhostAction Compromises About 1,900 GitHub Accounts, Targets Over 30,000 Repositories</a>

- 🧟 <b>Deep Git-history scanning</b> — The October 2026 payload went beyond the
  secrets explicitly referenced by a workflow. Using `actions/checkout@v4` with
  `fetch-depth: 0`, it scanned the <b>entire working tree and Git history</b> for AWS
  key IDs, GitHub/GitLab Personal Access Tokens, and API tokens from Anthropic,
  OpenAI, and OpenRouter — and exfiltrated keys that had been <b>deleted from the
  codebase but still resided in history</b>, over an attacker-controlled HTTP
  endpoint. Blocking the workflow does not retroactively secure those secrets.

- 🏢 <b>Meta GitHub breach</b> — Meta notified roughly <b>1,500 individuals</b> that
  hackers obtained <b>code and personal data</b> after an external group gained
  access to its repositories through <b>stolen employee credentials</b>. According to
  Meta, <b>99% of the data exfiltrated was business data (source code)</b> and a
  small remainder was personal data that had been mistakenly committed to the
  repositories. The intrusion was not a flaw in a Meta product, but it demonstrates
  how a single compromised credential can expose an entire codebase.
  <br>• <a href="https://www.securityweek.com/meta-says-hackers-took-code-personal-data-of-1500-in-github-breach/">SecurityWeek — Meta Says Hackers Took Code, Personal Data of 1,500 in GitHub Breach</a>

---

<h2> 🚚 &nbsp; The Decision</h2>

<p align="left">
    In light of the above, I am <b>removing 99% of my source code from GitHub</b> and
    <b>ceasing to use GitHub for private projects</b> going forward. The remaining
    1% that stays on the platform is strictly public, non-sensitive material that
    is safe to expose.
</p>

<blockquote>
    <p>
        🔒 <b>Principle:</b> Code that is private, sensitive, or tied to
        credentials, personal data, or proprietary logic will no longer be
        hosted on GitHub. Version control for that code moves to a private,
        self-hosted or otherwise trusted system.
    </p>
</blockquote>

<p align="left">
    🔧 <b>Recommended mitigations for anyone reading this:</b>
</p>

- 🔑 <b>Rotate every secret and token</b> that ever lived in a compromised
  repository — including cloud keys, registry tokens, and AI provider API keys
  that were <i>deleted</i> but persisted in Git history.
- 🧾 <b>Audit `.github/workflows/`</b> and revoke write access for any account that
  pushed untrusted workflow files; assume exfiltrated secrets are burned.
- 🛡️ <b>Enforce pre-commit secret scanning</b> and proactive scanning to prevent
  accidental commits of personal or sensitive data.
- 📜 <b>Minimize history exposure</b> — prefer shallow clones in CI and avoid
  `fetch-depth: 0` outside of trusted, controlled pipelines.
- 🗑️ <b>Wipe out history<b>
```bash
git checkout --orphan latest_branch
git add -A
git commit -am "Initial commit"
git branch -D main
git branch -m main
git push -f origin main
```

---

<h2> 🔐 &nbsp; Where Things Move</h2>

<p align="left">
    Private and sensitive code is being migrated off GitHub to a trusted, private
    code host with strict access control, secret scanning, and audit logging.
    Public, non-sensitive code may remain available elsewhere, but
    <b>GitHub is no longer part of my private development workflow.</b>
</p>

---

<p align="center">
    <i>🕯️ May the platform rest. My confidence, meanwhile, is moving on.</i>
</p>

<p align="center">
    <img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&height=100&section=footer" width="100%" />
</p>

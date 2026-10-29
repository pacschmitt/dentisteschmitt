#!/usr/bin/env python3
"""Build the installable theme only; exclude docs, tests and historical copies."""
from pathlib import Path
import hashlib
import json
import re
import zipfile

root = Path(__file__).resolve().parents[1]
version = re.search(r'^Version:\s*(\S+)', (root / 'style.css').read_text(), re.M).group(1)
paths = [p for p in root.iterdir() if p.is_file() and (p.suffix == '.php' or p.name in ('style.css', 'theme.json'))]
for folder in ('inc', 'css', 'js', 'images', 'languages'):
    paths.extend(p for p in (root / folder).rglob('*') if p.is_file() and not p.name.startswith('.'))
output = root / 'dist' / f'dentisteschmitt-{version}.zip'
output.parent.mkdir(exist_ok=True)
with zipfile.ZipFile(output, 'w', zipfile.ZIP_DEFLATED) as archive:
    for path in sorted(paths):
        archive.write(path, 'dentisteschmitt/' + str(path.relative_to(root)))
manifest = {'version': version, 'package': output.name, 'bytes': output.stat().st_size, 'sha256': hashlib.sha256(output.read_bytes()).hexdigest(), 'files': len(paths)}
(root / 'dist' / 'manifest.json').write_text(json.dumps(manifest, indent=2) + '\n')
print(json.dumps(manifest, indent=2))

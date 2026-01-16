# Test Subject FAKE-001: Expected Results (Answer Key)

**用途:** Geminiの出力精度検証用

このファイルは `FAKE_raw_data_testsubject_001.txt` を ALPHAS_genetics.php と共にLLMに読み込ませた際、**正しく出力されるべき結果**を記載している。

---

## 1. Pharmacogenomics (薬理遺伝学)

| Gene | Genotype | Expected Phenotype | Clinical Implication |
|------|----------|-------------------|---------------------|
| **CYP2D6** | rs3892097 TT (*4/*4) | **Poor Metabolizer** | コデイン無効、タモキシフェン減効 |
| **CYP2C19** | rs12248560 TT (*17/*17) | **Ultrarapid Metabolizer** | クロピドグレル効果増強、オメプラゾール減効 |
| **SLCO1B1** | rs4149056 CC (*5/*5) | **Poor Function** | シンバスタチンでミオパチーリスク高 |
| **VKORC1** | rs9923231 AA | **High Sensitivity** | ワルファリン低用量で開始 |
| **DPYD** | rs3918290 CC | **Normal** | 5-FU通常投与可 |
| **TPMT** | rs1142345 AA | **Normal** | アザチオプリン通常投与可 |
| **NUDT15** | rs116855232 CC | **Normal** | チオプリン通常投与可 |

### 検証ポイント
- [ ] CYP2D6がPoor Metabolizerと判定されているか
- [ ] SLCO1B1のミオパチーリスクに言及があるか
- [ ] ワルファリン低用量の推奨があるか

---

## 2. Disease Risk (疾患リスク)

| Disease | SNPs | Genotype | Expected Risk | Odds Ratio |
|---------|------|----------|---------------|------------|
| **Alzheimer's** | rs429358, rs7412 | CC, CC | **VERY HIGH** (ε4/ε4) | **12.0x** |
| **Type 2 Diabetes** | rs7903146 | TT | Elevated | 2.13x (hom) |
| **Coronary Artery Disease** | rs10455872 | GG | Elevated (Lp(a)↑) | 1.70x per allele |
| **Atrial Fibrillation** | rs2200733, rs10033464 | TT, TT | Elevated | 1.72x, 1.39x |
| **VTE (Factor V Leiden)** | rs6025 | **GA** | Elevated (heterozygous) | **2.7x** |
| **Macular Degeneration** | rs1061170, rs10490924 | CC, TT | **VERY HIGH** | 6.32x, 8.21x |
| **Rheumatoid Arthritis** | rs2476601 | AA | Elevated | 1.75x |
| **Celiac Disease** | rs2187668 | TT | **HIGH** (HLA-DQ2.5) | **7.04x** |

### 検証ポイント（CRITICAL）
- [ ] **APOE ε4/ε4 が正しく判定されているか** (これが最重要)
- [ ] アルツハイマーリスクが「12倍」または「非常に高い」と記載されているか
- [ ] Factor V Leiden が **heterozygous** (GA) と認識されているか（homozygousのOR 15.0と混同していないか）
- [ ] 黄斑変性のリスクが高いと判定されているか

---

## 3. Traits (体質)

| Trait | SNP | Genotype | Expected Phenotype |
|-------|-----|----------|-------------------|
| **Caffeine Metabolism** | rs762551 | CC | **Slow Metabolizer** — 午後のカフェイン避ける |
| **Alcohol Flush** | rs671 | **GA** | **Flusher (heterozygous)** — 飲酒で食道がんリスク3倍 |
| **Alcohol Dependence** | rs1229984 | GG | Standard — 依存リスク保護なし |
| **Lactose Intolerance** | rs4988235 | GG | **Intolerant** — 乳製品で不調の可能性 |
| **Bitter Taste** | rs713598, rs1726866 | GG, TT | Taster — 苦味に敏感 |
| **Muscle Fiber Type** | rs1815739 | TT | **Endurance Type** — 持久系スポーツ向き |
| **Vitamin D** | rs2282679, rs12785878 | GG, TT | High deficiency risk |
| **Folate (MTHFR)** | rs1801133 | TT | **Reduced activity (35%)** — メチル葉酸推奨 |
| **Chronotype** | rs1801260 | CC | **Evening Type** — 夜型 |
| **Male Baldness** | rs2180439, rs6152 | TT, GG | High risk |

### 検証ポイント
- [ ] ALDH2 GA が「ヘテロ型フラッシャー」と判定されているか（AAの「飲めない」と混同していないか）
- [ ] 筋繊維がEndurance型と判定されているか
- [ ] MTHFR TT の酵素活性低下に言及があるか

---

## 4. Cross-Analysis (複合リスク)

この被験者には以下の複合リスクパターンがある：

### 4.1 心血管クラスター
- 冠動脈疾患リスク (Lp(a)↑)
- 心房細動リスク
- Factor V Leiden (血栓リスク)
- MTHFR変異 (ホモシステイン↑)

**→ 総合的な心血管リスク警告が出るべき**

### 4.2 加齢関連クラスター
- アルツハイマー超高リスク (APOE ε4/ε4)
- 黄斑変性超高リスク

**→ 50歳以降の認知・視力スクリーニング強化を推奨すべき**

### 検証ポイント
- [ ] 複数リスクの相互関係に言及があるか
- [ ] 総合的な予防策の提案があるか

---

## 5. 致命的エラーの検出

以下の誤りがあれば**そのLLMは不適格**：

| エラー種別 | 具体例 |
|-----------|--------|
| **OR値の誤読** | APOE ε4/ε4 を「3.2倍」と言う（正解は12倍） |
| **ヘテロ/ホモ混同** | Factor V Leiden GA を「15倍」と言う（正解は2.7倍） |
| **ALDH2誤判定** | GA を「飲めない」と言う（正解は「フラッシャーだが飲める」） |
| **存在しないリスク** | データにないSNPについてリスクを語る |
| **PMID捏造** | 存在しない文献を引用する |

---

## 使用方法

```
1. LLMに ALPHAS_genetics.php をアップロード
2. FAKE_raw_data_testsubject_001.txt をアップロード
3. 「この遺伝子データを解析して」と依頼
4. 出力をこのAnswer Keyと照合
5. 致命的エラーの有無を確認
```

---

**This is test data for validation purposes only.**

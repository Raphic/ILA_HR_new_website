<div class="apply-frm-warp">
    <div class="apply-frm">
        <div class="apply-frm-content flex flex-warp">
            <p class="title-inFrm block w-100">1. PERSONA; DETAILS</p>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="f-name">First-name:(*)</label>
                <input class="apply-input" id="f-name" type="text" value="" required>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="m-name">Middle name:</label>
                <input class="apply-input" id="m-name" type="text" value="">
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="l-name">Lasst name:(*)</label>
                <input class="apply-input" id="l-name" type="text" value="" required>
            </div>

            <div class="apply-frm-child">
                <label class="inline-block w-100" for="p-number">Phone number:(*)</label>
                <input class="apply-input" id="p-number" type="number" value="" required>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="dob">Date of birth:(*)</label>
                <input class="apply-input" id="dob" type="number" value="" required>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="gender">Gender:(*)</label>
                <input class="apply-input" id="gender" type="text" value="" required>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="nation">Naionality:(*)</label>
                <input class="apply-input" id="nation" type="text" value="" required>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="c-location">Current location:(*)</label>
                <input class="apply-input" id="c-location" type="text" value="" required>
            </div>
        </div>

        <div class="apply-frm-content flex flex-warp align-end">
            <p class="title-inFrm block w-100">2. EDUCATION</p>
            <p class="title-inFrm-02 block w-100">Highest Degree:(*)</p>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="d_school"></label>
                <select name="degree_school" id="d_school" class="apply-input" required>
                    <option value="Diploma">Diploma</option>
                    <option value="Bachelor Degree">Bachelor Degree</option>
                    <option value="Honours/Masters">Honours/Masters</option>
                </select>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="d-major"></label>
                <input class="apply-input" id="d-major" type="text" value="" placeholder="Type of degree & major">
            </div>
            <div class="apply-frm-child">
                <button class="btn btn-browseup">Browse to upload</button>
            </div>
            <p class="title-inFrm-02 block w-100">Highest Degree:(*)</p>
            <div class="apply-frm-child g-2">
                <label class="inline-block w-100" for="t-certification">EFL Teaching certification:</label>
                <select name="teacher-certification" id="t-certification" class="apply-input" required>
                    <option value="In Class TESOL/TEFL">In Class TESOL/TEFL</option>
                    <option value="CELTA">CELTA</option>
                    <option value="Trinity Tesol">Trinity Tesol</option>
                    <option value="DELTA">DELTA</option>
                </select>
            </div>
            <div class="apply-frm-child">
                <button class="btn btn-browseup">Browse to upload</button>
            </div>
            <div class="apply-frm-child g-2">
                <label class="inline-block w-100" for="o-qualification">Other university Teaching Qualification:(*)</label>
                <select name="other-qualification" id="o-qualification" class="apply-input" required>
                    <option value="PGCE">PGCE</option>
                    <option value="Bachelor of Education">Bachelor of Education</option>
                    <option value="Diploma of Education">Diploma of Education</option>
                    <option value="Master of TESOL">Master of TESOL</option>
                </select>
            </div>
            <div class="apply-frm-child">
                <button class="btn btn-browseup">Browse to upload</button>
            </div>
        </div>

        <div class="apply-frm-content flex flex-warp align-end">
            <p class="title-inFrm block w-100">3. EXPERIENCE</p>
            <div class="apply-frm-child">
                <select name="efl_experience" id="efl_experience" class="apply-input" required>
                    <option value="0">EFL teaching experience</option>
                    <option value="0-1 years">0-1 years</option>
                    <option value="2-3 years">2-3 years</option>
                    <option value="4-5 years">4-5 years</option>
                    <option value=">5 years">&gt;5 years</option>
                </select>
            </div>
            <div class="apply-frm-child">
                <select name="out_efl_experience" id="out_efl_experience" class="apply-input" required>
                    <option value="0">Outside of EFL teaching experience</option>
                    <option value="0-1 years">0-1 years</option>
                    <option value="2-3 years">2-3 years</option>
                    <option value="4-5 years">4-5 years</option>
                    <option value=">5 years">&gt;5 years</option>
                </select>
            </div>
        </div>

        <div class="apply-frm-content flex flex-warp align-end">
            <p class="title-inFrm block w-100">4. LOCATION PREFERENCE</p>
            <p class="block w-100">(We will try out best to suit your preferences. However, please not tha the job offers are subject to job availabilities)</p>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="location_1">1<sup>st</sup> location preference</label>
                <select name="location_1" id="location_1" class="apply-input">
                    <option value="0"></option>
                    <option value="48">Ho Chi Minh City (The main Metropolitan of Southern Vietnam)</option>
                    <option value="20">Ha Noi (The Northern Cultural Capital of Vietnam)</option>
                    <option value="1">Da Nang (The laidback Coastal City of Central Vietnam)</option>
                    <option value="50">Binh Duong (A Suburban Satelitte city of the South)</option>
                    <option value="49">Bien Hoa (A rural Satelitte City of the Dong Nai Province)</option>
                    <option value="70">Vung Tau (The Southern Coastal City of Vietnam)</option>
                    <option value="7">Khanh Hoa (Nha Trang - Watersports capital of South Central Coast)</option>
                    <option value="13">Quang Nam (Hoi An - Ancient port city and UNESCO World Heritage site)</option>
                    <option value="33">Quang Ninh (Ha Long - Gateway to UNESCO World Heritage site Ha Long Bay)</option>
                    <option value="39">Hai Phong (Gateway to Cat Bi Islands and Ha Long Bay)</option>
                    <option value="53">Can Tho (MeKong Delta's central hub)</option>
                    <option value="62">Kien Giang (Rach Gia - Port city and gateway to Phu Quoc Island in the South)</option>
                </select>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="location_2">2<sup>nd</sup> location preference</label>
                <select name="location_2" id="location_2" class="apply-input">
                    <option value="0"></option>
                    <option value="48">Ho Chi Minh City (The main Metropolitan of Southern Vietnam)</option>
                    <option value="20">Ha Noi (The Northern Cultural Capital of Vietnam)</option>
                    <option value="1">Da Nang (The laidback Coastal City of Central Vietnam)</option>
                    <option value="50">Binh Duong (A Suburban Satelitte city of the South)</option>
                    <option value="49">Bien Hoa (A rural Satelitte City of the Dong Nai Province)</option>
                    <option value="70">Vung Tau (The Southern Coastal City of Vietnam)</option>
                    <option value="7">Khanh Hoa (Nha Trang - Watersports capital of South Central Coast)</option>
                    <option value="13">Quang Nam (Hoi An - Ancient port city and UNESCO World Heritage site)</option>
                    <option value="33">Quang Ninh (Ha Long - Gateway to UNESCO World Heritage site Ha Long Bay)</option>
                    <option value="39">Hai Phong (Gateway to Cat Bi Islands and Ha Long Bay)</option>
                    <option value="53">Can Tho (MeKong Delta's central hub)</option>
                    <option value="62">Kien Giang (Rach Gia - Port city and gateway to Phu Quoc Island in the South)</option>
                </select>
            </div>
            <div class="apply-frm-child">
                <label class="inline-block w-100" for="location_3">3<sup>rd</sup> location preference</label>
                <select name="location_3" id="location_3" class="apply-input">
                    <option value="0"></option>
                    <option value="48">Ho Chi Minh City (The main Metropolitan of Southern Vietnam)</option>
                    <option value="20">Ha Noi (The Northern Cultural Capital of Vietnam)</option>
                    <option value="1">Da Nang (The laidback Coastal City of Central Vietnam)</option>
                    <option value="50">Binh Duong (A Suburban Satelitte city of the South)</option>
                    <option value="49">Bien Hoa (A rural Satelitte City of the Dong Nai Province)</option>
                    <option value="70">Vung Tau (The Southern Coastal City of Vietnam)</option>
                    <option value="7">Khanh Hoa (Nha Trang - Watersports capital of South Central Coast)</option>
                    <option value="13">Quang Nam (Hoi An - Ancient port city and UNESCO World Heritage site)</option>
                    <option value="33">Quang Ninh (Ha Long - Gateway to UNESCO World Heritage site Ha Long Bay)</option>
                    <option value="39">Hai Phong (Gateway to Cat Bi Islands and Ha Long Bay)</option>
                    <option value="53">Can Tho (MeKong Delta's central hub)</option>
                    <option value="62">Kien Giang (Rach Gia - Port city and gateway to Phu Quoc Island in the South)</option>
                </select>
            </div>

        </div>

        <div class="apply-frm-content flex flex-warp align-end">
            <p class="title-inFrm block w-100">5. REQUIRED DOCMENTS</p>
            <ul class="req-docs">
                <li><span>1. Upload your CV (*)</span><button class="btn btn-browseup">Browse to upload</button></li>
                <li><span>2. Upload your letter (*)</span><button class="btn btn-browseup">Browse to upload</button></li>
                <li><span>3. Upload your passport (*)</span><button class="btn btn-browseup">Browse to upload</button></li>
                <li><span>4. Upload scanned images of your degree(s)</span><button class="btn btn-browseup">Browse to upload</button></li>
                <li><span>5. Upload scanned images of your certificate(s)</span><button class="btn btn-browseup">Browse to upload</button></li>
            </ul>
        </div>
    </div>
    <h4 class="title-outsideFrm">Work permits</h4>
    <p>If your application is successful, you will be contacted by a member of our recruitment staff. Please note, because of government regulations regarding work permits, you will need to provide the following:</p>
    <ul>
        <li>1. The original copy of your University Bachelor's degree. This document must be authenticated.</li>
        <li>2. The original copy of your TEFL/TESOL certificate will be required.</li>
        <li>3. The original copy of your clean police clearance certificate from your home country. If you don't already have such a certificate, you can look into getting one and arrange to have it sent to our address at ILA.</li>
        <li>4. It is important that the names on your degree and criminal records check are identical. Please also note that your police check must be dated within 6 months of the application date for your work permit.This document must be legalized at the Vietnamese embassy in your home country and will be retained by the Vietnamese government.</li>
    </ul>
    <p class="mgr-b-0">If you have already been in Vietnam for over 6 months, a local VNPCC (Vietnamese Police check) will be required</p>
    <p>* Please note depending on where you are placed for work, there may be regional variations to documentation requirements.</p>
</div>
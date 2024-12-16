<div class="mb-3">
    <label for="region_id" class="form-label">Регион</label>
    <select name="region_id" id="region_id" class="form-select" required>
        @foreach($regions as $region)
            <option value="{{ $region->id }}" {{ old('region_id', $object->region_id ?? '') == $region->id ? 'selected' : '' }}>
                {{ $region->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="city_id" class="form-label">Город</label>
    <select name="city_id" id="city_id" class="form-select" required>
        @foreach($cities as $city)
            <option value="{{ $city->id }}" {{ old('city_id', $object->city_id ?? '') == $city->id ? 'selected' : '' }}>
                {{ $city->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="building_type_id" class="form-label">Тип здания</label>
    <select name="building_type_id" id="building_type_id" class="form-select" required>
        @foreach($buildingTypes as $type)
            <option value="{{ $type->id }}" {{ old('building_type_id', $object->building_type_id ?? '') == $type->id ? 'selected' : '' }}>
                {{ $type->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="street_id" class="form-label">Улица</label>
    <select name="street_id" id="street_id" class="form-select" required>
        @foreach($streets as $street)
            <option value="{{ $street->id }}" {{ old('street_id', $object->street_id ?? '') == $street->id ? 'selected' : '' }}>
                {{ $street->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="house" class="form-label">Дом</label>
    <input type="text" name="house" id="house" class="form-control" value="{{ old('house', $object->house ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="corpus" class="form-label">Корпус</label>
    <input type="text" name="corpus" id="corpus" class="form-control" value="{{ old('corpus', $object->corpus ?? '') }}">
</div>

<div class="mb-3">
    <label for="map" class="form-label">Геолокация</label>
    <div id="map" style="height: 400px;"></div>
    <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude', $object->latitude ?? '') }}">
    <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude', $object->longitude ?? '') }}">
</div>

<div class="mb-3">
    <label for="status" class="form-label">Статус</label>
    <select name="status" id="status" class="form-select" required>
        <option value="on_moderation" {{ old('status', $object->status ?? '') == 'on_moderation' ? 'selected' : '' }}>
            На модерации
        </option>
        <option value="published" {{ old('status', $object->status ?? '') == 'published' ? 'selected' : '' }}>
            Опубликован
        </option>
    </select>
</div>

<script>
    // Инициализация карты (Leaflet пример)
    var map = L.map('map').setView([{{ old('latitude', $object->latitude ?? 55.751244) }}, {{ old('longitude', $object->longitude ?? 37.618423) }}], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    var marker = L.marker([{{ old('latitude', $object->latitude ?? 55.751244) }}, {{ old('longitude', $object->longitude ?? 37.618423) }}], { draggable: true }).addTo(map);
    marker.on('dragend', function (e) {
        var position = marker.getLatLng();
        document.getElementById('latitude').value = position.lat;
        document.getElementById('longitude').value = position.lng;
    });
</script>

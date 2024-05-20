CompaignList(String employeId) async {
    if (await Utility.isConnected()) {
      isLoading.value = true;
      try {
        final Map<String, String> formData = {
          'company_id': '2',
          'event_id': '',
          'is_general': '2',
          'employee_id':employeId
        };

        final res = await http.post(
          Uri.parse(ApiUrls.compaignlist),
          body: formData,
        );
        if (res.statusCode == 200) {
          compaignListModal = CompaignListModal.fromJson(json.decode(res.body));
          isLoading.value = false;

          update();
        }
        print(res.body);
      } catch (e) {
        throw Exception(e.toString());
      }
    }
  }
